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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->integer('rate');
            $table->unsignedBigInteger('novels_id'); //pour la relation entre novel_id et comment
            $table->foreign('novels_id')->references('id')->on('novels');

            $table->unsignedBigInteger('cartoons_id'); // pour la relation entre carton_id et comment
            $table->foreign('cartoons_id')->references('id')->on('cartoons');
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
        Schema::dropIfExists('comments');
    }
};
