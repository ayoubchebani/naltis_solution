<?php

use Faker\Generator as Faker;
use App\Vehicle;
use App\Car;
use App\Truck;
$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'model' => $faker->company, 
        'make'  => $faker->catchPhrase,
        'year'  => $faker->year
    ];
});

$factory->define(Car::class, function () {
    return ['type' => 'App\Car']
        + factory(Vehicle::class)->raw();
});

$factory->define(Truck::class, function () {
    return ['type' => 'App\Truck']
        + factory(Vehicle::class)->raw();
});
