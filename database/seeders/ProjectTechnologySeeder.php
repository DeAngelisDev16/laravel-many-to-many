<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $projects = Project::all();
        $technologyID = Technology::all()->pluck('id');

        foreach ($projects as $project) {
            $project->technologies()->attach($faker->randomElements($technologyID, 2));
        }
    }
}
