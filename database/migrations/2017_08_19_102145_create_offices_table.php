<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('building_id')->unsigned();
            $table->tinyInteger('office_type');
            $table->integer('desk_number');
            $table->double('min_rental_per_month',15,2);
            $table->double('max_rental_per_month',15,2);
            $table->double('price',15,2);
            $table->integer('Area');
            $table->text('feature')->nullable();
            $table->tinyInteger('publish_archive');
            $table->timestamps();
            $table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
