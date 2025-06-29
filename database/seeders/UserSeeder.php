<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team_id = Team::where('name', 'Invenode')->first()->id;

        User::create([
            'name' => config('app.default_credentials.admin1.username'),
            'email' => config('app.default_credentials.admin1.email'),
            'password' => bcrypt(config('app.default_credentials.admin1.password')),
            'team_id' => $team_id
        ]);

        User::create([
            'name' => config('app.default_credentials.admin2.username'),
            'email' => config('app.default_credentials.admin2.email'),
            'password' => bcrypt(config('app.default_credentials.admin2.password')),
            'team_id' => $team_id
        ]);
    }
}
