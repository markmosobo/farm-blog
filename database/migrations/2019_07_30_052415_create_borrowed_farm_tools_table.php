<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowedFarmToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowed_farm_tools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('farm_tool_id')->unsigned();
            $table->foreign('farm_tool_id')->references('id')->on('farm_tools')
                ->onUpdate('cascade')->onDelete('no action');
            $table->string('borrower')->nullable();
            $table->string('borrowed_from')->nullable();
            $table->dateTime('borrowed_date')->nullable();
            $table->dateTime('return_date')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('borrowed_farm_tools');
    }
}
