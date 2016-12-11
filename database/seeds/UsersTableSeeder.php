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
          'name' => 'Susan',
          'email' => 'susan@buck.com',
          'password' => 'laravel',
          'notify' => 'n'
      ]);

      DB::table('users')->insert([

         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'CaptainAwesome650',
          'email' => 'deluongo@gmail.com',
          'password' => 'squadlocker',
          'notify' => 'n'
      ]);

      DB::table('users')->insert([

         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'HillaryClinton',
          'email' => 'HillaryClinton@gmail.com',
          'password' => 'fuckDonaldTrump',
          'notify' => 'n'
      ]);

      DB::table('users')->insert([

         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'AishaCurry30',
          'email' => 'AishaCurry30@gmail.com',
          'password' => 'stephshot',
          'notify' => 'n'
      ]);

      DB::table('users')->insert([

         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'name' => 'PrettyBoiFredo',
          'email' => 'Fredo0@gmail.com',
          'password' => 'Mirrors',
          'notify' => 'n'
      ]);
    }
}
