<?php

use App\Models\Favorite;
use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10; $i++) { 
            Favorite::create([
                'user_id' => 1,
                'tweet_id' => $i
            ]);
        }
    }
}
