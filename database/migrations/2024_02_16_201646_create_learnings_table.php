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
        Schema::create('learnings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('image_url');
            $table->enum('source',['yt', 'udacity', 'udemy', 'coursera', 'skillshare', 'others'])->nullable();
            $table->string('author', 50);
            $table->string('duration');
            $table->string('description');
            $table->string('redirect_url');
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
        Schema::dropIfExists('learnings');
    }
};
