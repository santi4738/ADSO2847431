<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pets')->insert([
            'name' => 'Firulais',
            'kind' => 'dog',
            'weight' => 16, 
            'age' => 24,    
            'breed' => 'Shiba Inu',
            'location' => 'Kioto',
            'description' => 'The Shiba Inu is a dog breed originating from Japan, known for its fox-like appearance and independent, alert temperament.',
            'created_at' => now(),
        ]);
        DB::table('pets')->insert([
            'name' => 'Michi',
            'kind' => 'cat',
            'weight' => 4, 
            'age' => 3,    
            'breed' => 'Siames',
            'location' => 'Osaka',
            'description' => 'The Siamese cat is a sleek and elegant breed known for its striking blue almond-shaped eyes, short coat, and distinctive color points on its ears, face, paws, and tail.',
            'created_at' => now(),
        ]);
        DB::table('pets')->insert([
            'name' => 'Killer',
            'kind' => 'Dog',
            'weight' => 5, 
            'age' => 48,    
            'breed' => 'French Poodle',
            'location' => 'Tokyo',
            'description' => 'The French Poodle, often simply called the Poodle, is an elegant and highly intelligent dog breed known for its distinctive curly or corded coat and graceful demeanor.',
            'created_at' => now(),
        ]);
        
    }
}