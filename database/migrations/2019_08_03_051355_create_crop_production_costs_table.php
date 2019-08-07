<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropProductionCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_production_costs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crop_name_id')->unsigned();
            $table->foreign('crop_name_id')->references('id')->on('crops')
                    ->onUpdate('cascade')->onDelete('no action');
            $table->mediumInteger('input_costs')->nullable();
            $table->mediumInteger('recurrent_costs')->nullable();
            $table->longText('description')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('crop_production_costs');
    }
}
