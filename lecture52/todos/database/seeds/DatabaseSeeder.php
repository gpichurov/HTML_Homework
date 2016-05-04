<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
//use database\seeds\UserstableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TodosTableSeeder::class);
    }
}
