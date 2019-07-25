<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCropLabourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_labour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crop_name_id')->unsigned();
            $table->foreign('crop_name_id')->references('id')->on('crops')
                ->onUpdate('cascade')->onDelete('no action');
            $table->string('labourers_full_name')->nullable();
            $table->longText('responsibility')->nullable();
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
        Schema::dropIfExists('crop_labour');
    }
}
