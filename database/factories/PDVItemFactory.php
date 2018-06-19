
<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Business\Entities\PDVItem::class, function (Faker $faker) {
    return [
        'descricao' => $faker->text,
        'valor' => $faker->randomFloat(2, 1.00, 100.00),
        'pdv_cat_item_id' => $faker->numberBetween(1, 10)
    ];
});