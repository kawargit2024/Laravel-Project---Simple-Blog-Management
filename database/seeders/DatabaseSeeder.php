<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',  
            'password' => bcrypt('12345678'),
            'id' => 1,    
        ]);
        
        // Blogs data
        
        Blog::factory(100)->create();
    }
}
