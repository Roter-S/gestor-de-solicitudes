<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RequestStatus;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('admin12345')
        ]);
        User::create([
            'role_id' => '2',
            'firstName' => 'Operador',
            'firstLastName' => 'General',
            'email' => 'operator@admin.com',
            'password' => Hash::make('admin12345')
        ]);

        User::factory()->count(20)->create();
        RequestStatus::factory()->count(20)->create();
    }
}
