<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $saas = User::factory()->create([
            'name' => 'SAAS',
            'email' => 'Memad@shopsmart.com',
            'password' => Hash::make('123456'),
        ]);

        $this->call([
            // UserSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
        ]);

        // $saas->assignRole(['saas', 'vendor', 'client']);
    }
}
