<?php

namespace Database\Seeders;

use App\Models\Novel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class BooksSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0 ; $i <10 ; $i++){
            Novel::firstOrCreate([
                'title' => $faker->name(),
                'author_firstname' => $faker->firstName(),
                'author_lastname'  => $faker->lastName(),
                'book_type'         =>Novel::BOOKTYPE[random_int(0, count(Novel::BOOKTYPE)-1)] ,
                'isbn' => $faker->randomNumber(5, true), 
                'pages_nb'  => $faker->numberBetween(50, 1000),
            ]);
        }
        


             /* DB::table('novels')->insert([
                'title' => $this->faker->name(),
            'author_firstname' => $this->faker->firstName(),
            'author_lastname'  => $this->faker->lastName(),
            'isbn' => $this->faker->unique()->Str::random(19),
            'pages_nb'  => $this->faker->Str::random(3),
            ]);  */
    }
}
