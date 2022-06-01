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
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author_firstname');
            $table->string('author_lastname');
            $table->bigInteger('isbn');
            $table->string('book_type');
            $table->integer('pages_nb');
            $table->integer('volume_nb');
            $table->boolean('active');
            $table->boolean('finish');
            //$table->string('cover') mettre dans une migrations novel_image
            $table->dateTime('begin_at');
            $table->dateTime('end_at');
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
        Schema::dropIfExists('novels');
    }
};
