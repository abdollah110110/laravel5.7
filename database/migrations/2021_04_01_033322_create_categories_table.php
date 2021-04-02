<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'categories', function (Blueprint $table) {
			$table->increments( 'id' );
			$table->integer('category_id')->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->string('name');
			$table->string('image')->nullable();
			$table->boolean('active')->default(1);
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::disableForeignKeyConstraints();
		Schema::dropIfExists( 'categories' );
	}

}
