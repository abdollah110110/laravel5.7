<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run( Faker\Generator $faker ) {
		for ( $i = 0; $i < 5; $i ++ ) {
			DB::table( 'users' )->insert( [
				'name' => $faker->name,
				'email' => $faker->unique()->safeEmail,
				'password' => bcrypt('secret'),
				'remember_token' => str_random( 10 ),
				'created_at'=> Carbon::now(),
				'updated_at'=> Carbon::now(),
			] );
		}
	}

}
