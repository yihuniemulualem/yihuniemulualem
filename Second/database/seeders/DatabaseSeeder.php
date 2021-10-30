<?php

namespace Database\Seeders;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
$faker=faker::create();
foreach(range(1,100) as $index){
    db::table('post_controls')->insert([
        'title'=>$faker->text(40),
        'body'=>$faker->text(100),
    ]);
}


        // \App\Models\User::factory(10)->create();
    }
}
