<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'phone_number'=>'01775641072',
                'parmanent_address'=>'dk',
                'present_address'=>'cp',
                'admin'=>'1',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'user@gmail.com',
                'phone_number'=>'01775641072',
                'parmanent_address'=>'dk',
                'present_address'=>'cp',
                'admin'=>'0',
                'password'=> bcrypt('123456'),
            ],
            ];
    foreach ($user as $key => $value) {
        User::create($value);
    }
    }
}
