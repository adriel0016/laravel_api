<?php

use Illuminate\Database\Seeder;

class EntidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Business\Models\Generic\Entidade::class, 10)->create();
    }
}