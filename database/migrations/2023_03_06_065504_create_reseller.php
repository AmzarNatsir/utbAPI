<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseller', function (Blueprint $table) {
            $table->id();
            $table->string("Name", 200);
            $table->string("Address", 200);
            $table->string("MobileNumber", 100);
            $table->string("Email", 100);
            $table->string("ContactPerson", 100);
            $table->integer('IdAgent')->unsigned();
            $table->foreign('IdAgent')->references('id')->on('agent');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseller');
    }
};
