<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define( App\Article::class, function (Faker $faker) {

	$title=$faker->sentence();

	return [
		'user_id' => $faker->numberBetween( 1, 5 ),
		'title' => $title,
		'slug'=> str_slug($title),
		'body' => $faker->text(),
	];
} );
