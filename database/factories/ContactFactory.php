<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// E164 Phone Number : adalah nomor lengkap antar VoIP yang sudah terintegrasi dengan teleponrakyat.id

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'phone' => $faker->e164PhoneNumber
    ];
});
