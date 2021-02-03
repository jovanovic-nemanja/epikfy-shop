<?php

/*
 * This file is part of the Epikfy App package.
 *
 * (c) Julio Hernández <juliohernandezs@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Epikfy\Users\Models\User;
use Illuminate\Database\Seeder;
use Epikfy\AddressBook\Models\Address;

class AddressBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('role', 'like', 'customer')->first();

        factory(Address::class)->create(['user_id' => $user->id]);

        factory(Address::class, 2)->create([
            'default' => false,
            'user_id' => $user->id
        ]);
    }
}
