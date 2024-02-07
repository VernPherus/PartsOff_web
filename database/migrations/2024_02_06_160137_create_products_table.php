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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 2000);
            $table->string('image', 2000);
            $table->string('image_mime', 45);
            $table->int('image_size');
            $table->longText('description');
            $table->string('status');
            $table->decimal('price', 10, 2);
            $table->morphs('tags');
            $table->bigInteger('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('admins');
            $table->bigInteger('updated_by');
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
        Schema::dropIfExists('products');
    }
};
