<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_user')->insert([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'phone'=>str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'confirm_password' => bcrypt('secret'),
           
        ]);
    }
}
