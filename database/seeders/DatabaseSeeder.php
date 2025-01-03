<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(200)->create();

        User::query()->inRandomOrder()->limit(10)->get()
        ->each(fn (User $u) => Project::factory()->create(['created_by' => $u->id]));
        // ->each(function (User $u) {
        //     Project::factory()->create(['created_by' => $u->id]);
            // $project = Project::factory()->create(['created_by' => $u->id]);
            // Proposal::factory()->count(random_int(4, 45))->create(['project_id' => $project->id]);
        // });
    }
}
