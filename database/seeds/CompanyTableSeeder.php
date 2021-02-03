<?php

/*
 * This file is part of the Epikfy App package.
 *
 * (c) Julio Hernández <juliohernandezs@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Seeder;
use Epikfy\Companies\Models\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class)->create([
            'name' => 'epikfy',
            'description' => 'An Laravel e-commerce Application',
            'email' => 'info@epikfy.com',
            'contact_email' => 'contact@epikfy.com',
            'sales_email' => 'sales@epikfy.com',
            'support_email' => 'support@epikfy.com',
            'website' => 'http://epikfy.com',
            'twitter' => 'https://twitter.com/epikfy',
            'facebook' => 'https://www.facebook.com/epikfy',
            'default' => true,
        ]);
    }
}
