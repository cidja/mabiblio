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
        Schema::table('novels', function (Blueprint $table){
            $table->bigInteger('isbn')->nullable()->change();
            $table->integer('volumes_nb')->default(0)->change();
            $table->date('begin_at')->change();
            $table->date('end_at')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* Schema::create('novels', function (Blueprint $table) {
           
            $table->integer('volumes_nb');
            $table->boolean('active')->default(0);
            $table->boolean('finish')->default(0);
            //$table->string('cover') mettre dans une migrations novel_image
            $table->dateTime('begin_at')->nullable();
            $table->dateTime('end_at')->nullable();
            $table->timestamps();
        });
        Schema::table('novels', function (Blueprint $table){
            $table->bigInteger('isbn')->change();
            $table->integer('volumes_nb');
            $table->date('begin_at')->change();
            $table->date('end_at')->change();
        }); */
    }
};
