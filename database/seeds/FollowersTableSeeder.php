<?php

use App\Models\Follower;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) { 
            Follower::create([
                'following_id' => $i,
                'followed_id' => 1
            ]);
        }
    }
}
