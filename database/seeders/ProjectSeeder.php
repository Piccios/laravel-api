<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projectList = [
            [
                "nome" => "laravel-auth",
                "url_repository" => "https://github.com/Piccios/laravel-auth",
            ],
            [
                "nome" => "laravel-auth-remplate",
                "url_repository" => "https://github.com/Piccios/laravel-auth-template",
            ],
            [
                "nome" => "laravel-base-crud",
                "url_repository" => "https://github.com/Piccios/laravel-base-crud",
            ],
            [
                "nome" => "laravel-migration-seeder",
                "linguaggio" => "php",
                "url_repository" => "https://github.com/Piccios/laravel-migration-seeder",
            ],
            [
                "nome" => "laravel-model-controller",
                "url_repository" => "https://github.com/Piccios/laravel-model-controller",
            ],
            [
                "nome" => "laravel-comics",
                "url_repository" => "https://github.com/Piccios/laravel-comics",
            ],
            [
                "nome" => "laravel-scaffolding-template",
                "url_repository" => "https://github.com/Piccios/laravel-scaffolding-template",
            ],
            [
                "nome" => "php-oop-2",
                "url_repository" => "https://github.com/Piccios/php-oop-2",
            ],
            [
                "nome" => "php-todo-list-json",
                "url_repository" => "https://github.com/Piccios/php-todo-list-json",
            ],
            [
                "nome" => "proj-html-vuejs",
                "url_repository" => "https://github.com/Piccios/proj-html-vuejs",
            ],
            [
                "nome" => "vite-boolflix",
                "url_repository" => "https://github.com/Piccios/vite-boolflix",
            ],
            [
                "nome" => "vite-yu-gi-oh",
                "url_repository" => "https://github.com/Piccios/vite-yu-gi-oh",
            ],
            [
                "nome" => "vite-comics",
                "url_repository" => "https://github.com/Piccios/vite-comics",
            ],
            [
                "nome" => "vue-boolzapp",
                "url_repository" => "https://github.com/Piccios/vue-boolzapp",
            ],
        ];
        $types = Type::all()->pluck('id');
        foreach ($projectList as $project) {
            $newProject = new Project();
            $newProject->type_id = $faker->randomElement($types);
            $newProject->nome = $project["nome"];
            $newProject->url_repository = $project["url_repository"];
            $newProject->save();
        }
    }
}
