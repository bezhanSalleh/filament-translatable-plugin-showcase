<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (User::doesntExist()) {
            User::factory()
                ->create([
                    'name' => 'Admin',
                    'email' => 'admin@test.com',
                ]);
        }
        Post::factory(10)->create();
        Post::factory(10)
            ->create([
                'published_at' => null
            ]);
    }
}
