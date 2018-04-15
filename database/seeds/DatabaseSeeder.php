<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        for ($i = 0; $i < 3; $i++)
            DB::table('slider')->insert([
                'img' => 'slider1.jpg',
                'description' => str_random(100)
            ]);
    }
}
