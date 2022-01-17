<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 21; $i++) {
            $new_item = new Post();
            $new_item->author = $faker->name(null);
            $new_item->date = $faker->time();
            $new_item->topic = $faker->word();
            $new_item->title = $faker->sentence(3);
            $new_item->article = $faker->paragraph();
            $new_item->image = $faker->imageUrl(425, 282, 'animals', true);
            $new_item->save();
        }
    }
}
