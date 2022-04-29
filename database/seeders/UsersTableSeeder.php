<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<2; $i++){
            User::firstOrCreate([
                'name'=> 'user'.$i,
                'email'=> 'user'.$i.'@gmail.com',
                'password'=> bcrypt('0000'),
            ])->save();
        }

        User::firstOrCreate([
            'name'=> 'cheikh',
            'email' => 'cheikh@gmail.com',
            'password' => bcrypt('Passer123'),
        ])->save();
    }
}
