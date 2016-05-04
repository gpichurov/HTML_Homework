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
        DB::table('users')
            ->insert([
                'name' => 'myname2112',
                'email' => 'my@email1121.com',
                'password' => 'mypass11'
            ]);
    }
}
