<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'user_id' => 1,
            'text' => 'Reminder 1',
            'created_at' => Carbon::now('Europe/Sofia'),
            'updated_at' => Carbon::now('Europe/Sofia')
        ]);

        DB::table('todos')->insert([
            'user_id' => 1,
            'text' => 'Reminder 2',
            'created_at' => Carbon::now('Europe/Sofia'),
            'updated_at' => Carbon::now('Europe/Sofia')
        ]);

        DB::table('todos')->insert([
            'user_id' => 1,
            'text' => 'Reminder 3',
            'created_at' => Carbon::now('Europe/Sofia'),
            'updated_at' => Carbon::now('Europe/Sofia')
        ]);
    }
}
