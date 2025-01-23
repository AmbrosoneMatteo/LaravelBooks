<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
           $table->increments('id');
           $table->string('title');
           $table->text('description');
           $table->integer('pages');
           $table->string('image_path')->nullable();
           $table->integer('author_id')->unsigned();
           $table->foreign('author_id')->references('id')->on('authors');
           $table->integer('category_id')->unsigned();
           $table->foreign('category_id')->references('id')->on('categories');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
