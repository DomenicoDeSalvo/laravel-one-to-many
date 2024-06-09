<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for($i = 0; $i < 20; $i++){
            
            $project = new Project();
            $title = $faker->sentence(10);
            $project -> title = $title;
            $project -> slug = Str::slug($title);
            $project -> description = $faker->text(200);
            $project -> starting_date = $faker->dateTime();
            $project -> link = $faker->url();

            $project->save();
        }
    }
}
