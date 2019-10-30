<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10 ; $i++) {
            User::create([
                'screen_name' => 'test_user' .$i,
                'name' => 'TEST' .$i,
                'profile_image' => 'profile.png',
                'email' => 'test' .$i .'@test.com',
                'password' => Hash::make('12345678'),
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}