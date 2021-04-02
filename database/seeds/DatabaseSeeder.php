<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class DatabaseSeeder extends Seeder {

	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$faker = Factory::create();

//		DB::table( 'users' )->insert( [
//			'name' => 'عبدالله سمعی',
//			'email' => 'abdollah_sam@yahoo.com',
//			'password' => bcrypt( '123456' ),
//			'isAdmin' => 1,
//		] );
//		for ( $i = 0; $i < 5; $i ++ ) {
//			DB::table( 'users' )->insert( [
//				'name' => $faker->name,
//				'email' => $faker->email,
//				'password' => bcrypt( '123456' ),
//			] );
//		}

		for ( $i = 1; $i <= 4; $i ++ ) {
			DB::table( 'categories' )->insert( [
				'name' => $faker->text( 10 ),
				'image' => '/images/no-img.jpg',
			] );
		}
		for ( $j = 1; $j <= 15; $j ++ ) {
			DB::table( 'categories' )->insert( [
				'category_id' => rand( 1, 4 ),
				'name' => $faker->text( 10 ),
				'image' => '/images/no-img.jpg',
			] );
		}

//		$this->call(  UserFactory::class  );
	}

}
