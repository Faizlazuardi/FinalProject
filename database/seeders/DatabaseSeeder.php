<?php

namespace Database\Seeders;

use App\Models\Toy;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'id' => (string) Str::uuid(),
                'firstname' => 'admin',
                'lastname' => 'admin',
                'password' => bcrypt('admin123'),
                'role' => 'admin',
            ]
        );

        $categories = [
            'Puzzles',
            'Action Figures',
            'Dolls',
            'Board Games'
        ];
        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name' => $category],
                ['id' => (string) Str::uuid()]
            );
        }
        Toy::factory(5)->create();
    }
}
