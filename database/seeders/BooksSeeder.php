<?php

namespace Database\Seeders;

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
            DB::table('novels')->insert([
                'title' => $this->faker->name(),
            'author_firstname' => $this->faker->firstName(),
            'author_lastname'  => $this->faker->lastName(),
            'isbn' => $this->faker->unique()->Str::random(19),
            'pages_nb'  => $this->faker->Str::random(3),
            ]);
    }
}
