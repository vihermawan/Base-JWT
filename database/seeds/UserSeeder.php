<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker::create('id_ID');


        $data = [
            [1,'admin@gmail.com', bcrypt('12345678')],//1
        ];

        for ($i=0; $i < count($data); $i++) {
            $id_role = $data[$i][0];
            $email = $data[$i][1];
            $password = $data[$i][2];     
            $created_at = Carbon::now();
            $updated_at = Carbon::now();

            DB::table('users')->insert([
                'id_role' => $id_role,
                'email' => $email,
                'password' => $password,     
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ]);
        }


    
    }
}
