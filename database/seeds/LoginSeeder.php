<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new \App\User;
       $user->nama_user = 'Admin';
       $user->username = 'admin';
       $user->email = 'admin@me.com';
       $user->password = bcrypt('admin');
       $user->save();
    }
}
