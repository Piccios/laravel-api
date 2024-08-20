<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesName = [
            [
                "name" => "FrontEnd",
                "color" => "#003cff",
            ],
            [
                "name" => "BackEnd",
                "color" => "#ff0000",
            ],
            [
                "name" => "FullStack",
                "color" => "#000000",
            ],
        ];

        foreach ($typesName as $typeName) {
            Type::updateOrCreate(
                ['name' => $typeName['name']],
                ['color' => $typeName['color']]
            );
        }
    }
}
