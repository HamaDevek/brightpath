<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->text('extra')->nullable();
            $table->text('more')->nullable();
            $table->json('image')->nullable();
            $table->string('link')->nullable();
            $table->string('button')->nullable();
            $table->string('type');
            $table->boolean('multi')->default(0);//false
            $table->boolean('state')->default(0);//false
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
        Schema::dropIfExists('articles');
    }
}
