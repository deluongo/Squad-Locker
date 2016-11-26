<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table->increments('id');
        $table->integer('thread_id')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->text('body');
        $table->timestamps();

        DB::table('users')->insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
           'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
           # Owner
           'name' => 'CaptainAwesome650',
           'email' => 'deluongo@gmail.com',
           'password' => 'squadlocker',
           'notify' => 'y'
       ]);
    }
}
