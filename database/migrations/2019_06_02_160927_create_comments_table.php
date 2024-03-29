<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name')->default(null);
            $table->string('email');
            $table->string('home_page')->default(null);
            $table->string('message')->default(null);
            $table->string('file')->default(null);
            $table->integer('parent_id')->default(0);
            $table->integer('level')->default(0);
            $table->string('ip')->default(null);
            $table->string('browser')->default(null);
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
}
