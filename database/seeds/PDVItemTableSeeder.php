<?php

use Illuminate\Database\Seeder;

class PDVItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Business\Entities\PDVItem::class, 10)->create();
    }
}