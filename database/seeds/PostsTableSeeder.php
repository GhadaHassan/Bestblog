<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Post::class, 20)->create();

        // factory(App\Post::class, 10)->create()->each(function ($user) {
        //     $user->contacts()->save(factory(App\User::class)->make());
        // });

        $faker = Faker::create();
        // following line retrieve all the user_ids from DB
        $users = User::all()->pluck('id');
        
        foreach(range(1,15) as $index){
            $post = Post::create([
                'title' => $faker->title,
                'body' => $faker->paragraph, 
                'user_id' => $faker->randomElement($users),
            ]);
        }


        
    }
}
