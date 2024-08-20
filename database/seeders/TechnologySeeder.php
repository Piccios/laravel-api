<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = [
            ['name' => 'JavaScript', 'color' => '#f7df1e'],
            ['name' => 'Python', 'color' => '#3572A5'],
            ['name' => 'Java', 'color' => '#b07219'],
            ['name' => 'C++', 'color' => '#f34b7d'],
            ['name' => 'PHP', 'color' => '#4F5D95'],
            ['name' => 'Ruby', 'color' => '#701516'],
            ['name' => 'Swift', 'color' => '#ffac45'],
            ['name' => 'TypeScript', 'color' => '#3178c6'],
            ['name' => 'Go', 'color' => '#00ADD8'],
            ['name' => 'Kotlin', 'color' => '#A97BFF'],
            ['name' => 'R', 'color' => '#198CE7'],
            ['name' => 'Scala', 'color' => '#c22d40'],
            ['name' => 'Rust', 'color' => '#dea584'],
            ['name' => 'Perl', 'color' => '#0298c3'],
            ['name' => 'Haskell', 'color' => '#5e5086'],
            ['name' => 'Dart', 'color' => '#00B4AB'],
            ['name' => 'Elixir', 'color' => '#6e4a7e'],
            ['name' => 'Clojure', 'color' => '#5881d8'],
            ['name' => 'Shell', 'color' => '#89e051'],
            ['name' => 'Objective-C', 'color' => '#438eff']
        ];
        foreach ($technologies as $technologyData) {
            $technology = new Technology();
            $technology->name = $technologyData['name'];
            $technology->color = $technologyData['color'];
            $technology->save();

        }
    }
}
