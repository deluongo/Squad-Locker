<?php

use Illuminate\Database\Seeder;
use p4\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            # Define the users you want to add
        $users = [
            ['jill@harvard.edu','jill','helloworld'], # <-- Required for P4
            ['jamal@harvard.edu','jamal','helloworld'], # <-- Required for P4
            ['deluongo@gmail.com','CaptainAwesome650','squadlocker'], # <-- Update with your own info, or remove
            ['susan@buck.com', 'Susan', 'laravel'],
            ['HillaryClinton@gmail.com', 'HillaryClinton', 'fuckDonaldTrump'],
            ['AishaCurry30@gmail.com', 'AishaCurry30', 'stephshot'],
            ['Fredo0@gmail.com', 'PrettyBoiFredo', 'Mirrors'],
        ];

        # Get existing users to prevent duplicates
        $existingUsers = User::all()->keyBy('email')->toArray();

        foreach($users as $user) {

            # If the user does not already exist, add them
            if(!array_key_exists($user[0],$existingUsers)) {
                $user = User::create([
                    'email' => $user[0],
                    'name' => $user[1],
                    'password' => Hash::make($user[2]),
                ]);
            }
        }
    }
}
