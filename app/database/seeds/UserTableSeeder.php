<?php

Class UserTableSeeder extends Seeder {

    public function run()
    {
        $user = new User();
        $user->user = 'Micah';
        $user->email = 'micahjohnson1983@gmail.com';
        $user->password = $_ENV['USER_PASSWORD']; 
        $user->save();

    }
}