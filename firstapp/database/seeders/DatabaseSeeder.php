<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
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
       DB::table('users')->insert([
           'name'=>$faker->name,
           'email'=>$faker->email,
       ]);
        }
        // \App\Models\User::factory(10)->create();
    }
}
