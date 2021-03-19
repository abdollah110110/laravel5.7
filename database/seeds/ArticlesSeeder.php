<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticlesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run( Faker\Generator $faker ) {
		for ( $i = 0; $i < 10; $i ++ ) {
			DB::table( 'articles' )->insert( [
				'user_id' => $faker->numberBetween( 1, 5 ),
				'title' => $faker->sentence(),
				'body' => $faker->text(),
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			] );
		}
	}

}
