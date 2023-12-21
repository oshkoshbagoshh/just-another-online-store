<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;



class userstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        foreach(range(1,10) as $index){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                // 'role' => $faker->role,
                // 'remember_token' => $faker->remember_token,
                // 'balance' => $faker->balance,
                'balance' => '1000',
            ]);
        }
    }
}
