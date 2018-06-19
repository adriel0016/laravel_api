<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Business\Entities\User::class)->create([
            'name'      =>      'Adriel Oliveira',
            'email'     =>      'adriel_oliveira_almeida@hotmail.com',
        ]);
    }
}