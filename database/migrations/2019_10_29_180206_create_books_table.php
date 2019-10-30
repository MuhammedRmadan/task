<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapter_days_cost');
            //json may not work on ceertain environments
          //  $table->json('available_reading_days')->nullable();
            $table->string('available_reading_days')->nullable();
          //  $table->json('chapter_reading_map')->nullable();
            $table->longText('chapter_reading_map')->nullable();
            $table->integer('chapters_count');
            $table->timestamp('reading_start_date');
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
        Schema::dropIfExists('books');
    }
}
