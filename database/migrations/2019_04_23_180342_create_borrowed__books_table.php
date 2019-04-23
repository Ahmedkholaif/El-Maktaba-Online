<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowed__books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fees_per_day');
            $table->integer('number_of_days');
            $table->bigInteger('user_id');
            $table->bigInteger('book_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrowed__books');
    }
}
