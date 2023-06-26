<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categor_id');
            $table->string('title');
            $table->longText('content');
            $table->string('title1');
            $table->longText('content1');
            $table->string('image');
            $table->integer('hit')->default(0);
            $table->integer('status')->default(1)->comment('0:pasif 1:aktif');
            $table->string('slug');
            $table->timestamps();
  
              $table->foreign('categor_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
