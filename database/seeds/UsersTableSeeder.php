<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            # Owner
            'name' => 'CaptainAwesome650',
            'email' => 'deluongo@gmail.com',
            'password' => 'Ngu$8789',
            'notify' => 'y'
        ]);
    }
}
