<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement("SET foreign_key_checks = 0");

        \App\Business\Entities\User::truncate();
        \App\Business\Entities\PDVCategoriaItem::truncate();
        \App\Business\Entities\PDVItem::truncate();

        $this->call(UserTableSeeder::class);
        $this->call(PDVCategoriaItemTableSeeder::class);
        $this->call(PDVItemTableSeeder::class);

        Model::reguard();
    }
}
