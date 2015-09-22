<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        for ($i=0; $i < 50; $i++) {
          DB::table('contacts')->insert([
              'fullName' => str_random(10),
              'email' => str_random(10).'@gmail.com',
              'role' => 'Teacher',
              'schoolName' => str_random(20),
              'message' => str_random(255)
          ]);
        }

        Model::reguard();
    }
}
