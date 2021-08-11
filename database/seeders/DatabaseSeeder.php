<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RequestStatus;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['typeRole' => 'administrator']);
        Role::create(['typeRole' => 'operator']);
        Role::create(['typeRole' => 'applicant']);

        User::create([
            'role_id' => '1',
            'firstName' => 'Administrator',
            'firstLastName' => 'General',
            'email' => 'admin@admin.com',
            'password' => '$2a$12$dH/TNC7zxWVOGUMcng.vpud5RhfXNOA/Nq/nDhPhacPOwU22.9QVi'
        ]);
        User::create([
            'role_id' => '2',
            'firstName' => 'Operador',
            'firstLastName' => 'General',
            'email' => 'operator@admin.com',
            'password' => '$2a$12$dH/TNC7zxWVOGUMcng.vpud5RhfXNOA/Nq/nDhPhacPOwU22.9QVi'
        ]);

        User::factory()->count(20)->create();
        RequestStatus::factory()->count(20)->create();
    }
}
