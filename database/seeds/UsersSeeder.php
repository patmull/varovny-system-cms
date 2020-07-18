<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset users table
      //  DB::table('users')->truncate();

      DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // generate sample users
        DB::table('users')->insert([
            'name' => "National Disaster Institute",
            'email' => 'ndi@ndi.cz',
            'password' => bcrypt('secret')
        ])
    }
}
