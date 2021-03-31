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

		for ( $i = 0; $i < 5; $i ++ ) {
			DB::table( 'users' )->insert( [
				'name' => $faker->name,
				'email' => $faker->email,
				'password' => bcrypt( '123456' ),
			] );
		}

//		$this->call(  UserFactory::class  );
	}

}
