<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\order;
use Faker\Generator as Faker;

$factory->define(order::class, function (Faker $faker) {

    return [
        'id_company' => $faker->randomDigitNotNull,
        'id_user' => $faker->randomDigitNotNull,
        'payment_code' => $faker->word,
        'tanggal' => $faker->word,
        'subtotal' => $faker->randomDigitNotNull,
        'grand_total' => $faker->randomDigitNotNull,
        'discount' => $faker->randomDigitNotNull,
        'cash' => $faker->randomDigitNotNull,
        'change' => $faker->randomDigitNotNull,
        'note' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
