<?php

use App\Lesson;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::truncate();
        \Eloquent::unguard();
        $this->call(LessonsTableSeeder::class);
    }
}
