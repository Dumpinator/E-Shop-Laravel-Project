<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'toto';
        $user->email = $user->name .'@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();

        $user = new User();
        $user->name = 'jojo';
        $user->email = $user->name .'@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();

        $user = new User();
        $user->name = 'titi';
        $user->email = $user->name .'@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();
    }
}
