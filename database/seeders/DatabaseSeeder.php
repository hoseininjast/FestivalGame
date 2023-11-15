<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        User::create([
            'FirstName' => 'Admin',
            'LastName' => 'Admin',
            'ProfileImage' => asset('images/Avatars/Male.png'),
            'email' => 'admin@system.com',
            'email_verified_at' => Carbon::now(),
            'PhoneNumber' => '09301040145',
            'Charge' => 999999,
            'password' => \Hash::make(123),
            'Type' => 'Admin',
        ]);


    }
}
