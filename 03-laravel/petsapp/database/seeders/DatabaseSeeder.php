<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar a los seeders específicos
        $this->call([
            UserSeeder::class,
            PetSeeder::class,
        ]);

        // Crear 1000 mascotas usando el factory de Pet
        Pet::factory(1000)->create();

        // Crear 50 usuarios usando el factory de User
        User::factory(50)->create();

        // Opcional: Crear un usuario específico para pruebas
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}