<?php

namespace Database\Seeders;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie = [
            [
                'name' => 'Superman', 
                'price' => 55000,
                'date' => '2020-10-10',
                'desc' => 'Film superman',
                'category' => 'Superhero'
            ],
            [
                'name' => 'Batman', 
                'price' => 45000,
                'date' => '2020-10-11',
                'desc' => 'Film batman',
                'category' => 'Superhero'
            ],
            [
                'name' => 'Saw', 
                'price' => 50000,
                'date' => '2020-10-12',
                'desc' => 'Film hantu jepang',
                'category' => 'Horror'
            ],
            [
                'name' => 'Tali Pocong', 
                'price' => 50000,
                'date' => '2020-10-14',
                'desc' => 'Film hantu indonesia',
                'category' => 'Horror'
            ]
        ];

        foreach($movie as $value){
            Movie::create($value);
        }
    }
}
