<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'occupation_id' => $faker->numberBetween(1, 4314),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
		'birthdate' =>
			Faker\Provider\DateTime::dateTimeThisCentury($max = 'now'),
        'mobile_no' => $faker->phoneNumber,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
		'gender' => 'm',
		'salutation' => 'Mr'|'Mrs'|'Ms',
    ];
});

$factory->define(App\Models\Merchant::class, function (Faker\Generator $faker) {

    return [
        'user_id' => $faker->numberBetween(1, 30),
        'company_name' => $faker->company,
        'gst' => $faker->isbn10,
        'business_reg_no' => $faker->isbn10,
        'country_id' => $faker->numberBetween(1, 239),
        'business_type' => $faker->companySuffix,
        'address_id' => $faker->numberBetween(1, 10),
        'contact_person' => $faker->name,
        'office_no' => $faker->phoneNumber,
        'mobile_no' => $faker->phoneNumber,
        'oshop_name' => $faker->company,
        'oshop_logo_1' => $faker->word,
        'oshop_logo_2' => $faker->word,
        'oshop_logo_3' => $faker->word,
        'oshop_logo_4' => $faker->word,
        'oshop_logo_5' => $faker->word,
        'description' => $faker->paragraph,
        'history' => $faker->paragraph,
        'license' => $faker->boolean($chanceOfGettingTrue = 50),
        'coverage' => $faker->numerify('ALB'),
        'ownership' => $faker->boolean($chanceOfGettingTrue = 50),
        'category_id' => $faker->numberBetween(1, 10),
        'bank_id' => $faker->numberBetween(1, 10),
        'return_policy' => $faker->paragraph,
        'remarks' => $faker->paragraph
    ];

});

/*
$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->catchPhrase,
        'brand_id' => $faker->numberBetween(1, 10),
        'category_id' => $faker->numberBetween(1, 1),
        'subcat_id' => $faker->numberBetween(1, 22),
        'subcat_level' => $faker->numberBetween(1, 1),
        'photo_1' => $faker->word,
        'photo_2' => $faker->word,
        'photo_3' => $faker->word,
        'photo_4' => $faker->word,
        'photo_5' => $faker->word,
        'free_delivery' => $faker->boolean($chanceOfGettingTrue = 50),
        'del_worldwide' => $faker->numberBetween(1, 9),
        'del_west_malaysia' => $faker->numberBetween(1, 9),
        'del_sabah_labuan' => $faker->numberBetween(1, 9),
        'del_sarawak' => $faker->numberBetween(1, 9),
        'cov_country_id' => $faker->numberBetween(1, 239),
        'cov_state_id' => $faker->numberBetween(1, 16),
        'cov_city_id' => $faker->numberBetween(1, 4079),
        'retail_price' => $faker->numberBetween(1, 10000),
        'original_price' => $faker->numberBetween(1, 10000),
        'available' => $faker->boolean($chanceOfGettingTrue = 50),
        'product_details' => $faker->paragraph,
        'type' => 'product'
    ];
});

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'logo' => $faker->word,
        'floor' => $faker->numberBetween(1,3),
        'color' => $faker->numerify('#')
    ];

});
 */
