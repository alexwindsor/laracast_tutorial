<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      User::truncate();
      Category::truncate();
      Post::truncate();


      $user1 = User::factory()->create([
        'name' => 'Bob Gelford'
      ]);


      Post::factory(5)->create([
        'user_id' => $user1->id
      ]);





      // $user1 = User::factory()->create();
      // $user2 = User::factory()->create();
      // $user3 = User::factory()->create();
      //
      // $cat1 = Category::create(['name' => 'Mushrooms', 'slug' => 'mushrooms']);
      // $cat2 = Category::create(['name' => 'Not Mushrooms', 'slug' => 'not-mushrooms']);
      //
      // Post::create(['title' => 'Fly Agaric', 'user_id' => $user1->id, 'category_id' => $cat1->id, 'slug' => 'fly-agaric', 'excerpt' => 'asdmhf vakjsdhfkj ajshbdfkj sahb', 'body' => 'sdfnkjasdfn k,asndf masbdf masdbn fvsadnfvnasdvfnasvd fgvsadnbfvansgv']);
      //
      // Post::create(['title' => 'Common Hogweeed', 'user_id' => $user2->id, 'category_id' => $cat2->id, 'slug' => 'common-hogweed', 'excerpt' => 'asdmhf vakjsdhfkj ajshbdfkj sahb', 'body' => 'sdfnkjasdfn k,asndf masbdf masdbn fvsadnfvnasdvfnasvd fgvsadnbfvansgv']);
      //
      // Post::create(['title' => 'Nettles', 'user_id' => $user2->id, 'category_id' => $cat2->id, 'slug' => 'nettles', 'excerpt' => 'asdmhf vakjsdhfkj ajshbdfkj sahb', 'body' => 'sdfnkjasdfn k,asndf masbdf masdbn fvsadnfvnasdvfnasvd fgvsadnbfvansgv']);

    }
}
