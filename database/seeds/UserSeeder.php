<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            [
                'name' => 'Admin Satu',
                'email' => 'admin1@tb.com',
                'phone' => '0817601231',
                'role' => 'Admin',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Admin Dua',
                'email' => 'admin2@tb.com',
                'phone' => '0817601232',
                'role' => 'Admin',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Muhammad Donny Devanda',
                'email' => 'devanda@tb.com',
                'phone' => '0817603211',
                'role' => 'User',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Yuval Noah Harari',
                'email' => 'harari@tb.com',
                'phone' => '0817603214',
                'role' => 'User',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Napoleon Hill',
                'email' => 'hill@tb.com',
                'phone' => '0817603215',
                'role' => 'User',
                'password' => bcrypt('123'),
            ],
        ]);
    }
}
