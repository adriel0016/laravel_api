<?php

use Illuminate\Database\Seeder;

class PDVCategoriaItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Business\Entities\PDVCategoriaItem::class, 10)->create();
    }
}