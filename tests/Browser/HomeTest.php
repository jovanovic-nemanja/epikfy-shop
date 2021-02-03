<?php

/*
 * This file is part of the Epikfy Shop package.
 *
 * (c) Julio Hernández <juliohernandezs@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Tests\Browser;

use Tests\DuskTestCase;
use Epikfy\Users\Models\User;
use Tests\Browser\Pages\HomePage;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends DuskTestCase
{
	use DatabaseMigrations;

	/** @test */
	function an_unauthenticated_user_can_visit_the_homepage()
	{
	    $this->browse(function ($browser) {
                $browser->visit(new HomePage)
                	->assertSee('Epikfy');
        });
	}

	/** @test */
	function an_authenticated_user_can_visit_the_homepage()
	{
		$user = factory(User::class)->states('admin')->create()->first();

		$this->browse(function ($browser) use ($user) {

				$browser
					->loginAs($user)
					->visit(new HomePage)
                	->assertPathIs('/')
                	->assertSeeIn('@top-menu', $user->nickname);
        });

	}
}
