<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropLabourEconomicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_labour_economics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('labourers_full_name_id')->unsigned();
            $table->foreign('labourers_full_name_id')->references('id')
                    ->on('crop_labour')->onUpdate('cascade')->onDelete('no action');
            $table->dateTime('date');
            $table->integer('quantity')->nullable();
            $table->bigInteger('amount_due')->nullable();
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
        Schema::dropIfExists('crop_labour_economics');
    }
}
