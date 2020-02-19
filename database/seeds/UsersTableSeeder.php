<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();

        // $faker = Faker::create();
        // // $candidates = Candidate::lists('id');
        // foreach(range(1, 15) as $index)
        // {
        //     User::create([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'email_verified_at' => now(),
        //         'password' => '123456', // secret
        //         'remember_token' => str_random(10),
        //     ]);
        // }
        
        
    }
}
