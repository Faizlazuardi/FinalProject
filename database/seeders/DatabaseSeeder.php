<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'user_id' => (string) Str::uuid(),
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' =>'admin',
        ]);

        Category::create([
            'category_id' => (string) Str::uuid(),
            'name' => 'Puzzles',
        ]);
        Category::create([
            'category_id' => (string) Str::uuid(),
            'name' => 'Action Figures',
        ]);
        Category::create([
            'category_id' => (string) Str::uuid(),
            'name' => 'Dolls',
        ]);
        Category::create([
            'category_id' => (string) Str::uuid(),
            'name' => 'Board Games',
        ]);
    }
}
