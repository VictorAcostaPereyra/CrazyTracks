<?php

use Illuminate\Database\Seeder;
use Curso\User;
use Curso\Audio;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->command->call('migrate:fresh');
        factory(User::class)->create(['name'=>'Victor','email'=>'victorcito@gmail.com'])->each(function($user){
            factory(Audio::class,5)->create(['user_id'=>$user->id]);
        });
        factory(User::class,10)->create()->each(function($user){
            factory(Audio::class,5)->create(['user_id'=>$user->id]);
        });
       
        // $this->call(UsersTableSeeder::class);
    }
}
