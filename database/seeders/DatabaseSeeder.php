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
        for ($i=0; $i < 10; $i++) {
            Post::create([
                'title' => [
                    'en' => fake()->realText(10),
                    'fr' => fake('fr_FR')->realText(10),
                    'es' => fake('es_ES')->realText(10),
                    'ar' => fake('ar_SA')->realText(10),
                ],
                'body' => [
                    'en' => fake()->realText(250),
                    'fr' => fake('fr_FR')->realText(250),
                    'es' => fake('es_ES')->realText(250),
                    'ar' => fake('ar_SA')->realText(250)
                ],
            ]);
        }
    }
}
