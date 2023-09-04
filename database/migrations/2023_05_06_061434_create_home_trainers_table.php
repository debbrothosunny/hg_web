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
        Schema::create('home_trainers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->string('name_1');
            $table->string('fb_1');
            $table->string('image_1');
            $table->string('name_2');
            $table->string('fb_2');
            $table->string('image_2');
            $table->string('name_3');
            $table->string('fb_3');
            $table->string('image_3');
            $table->string('name_4');
            $table->string('fb_4');
            $table->string('image_4');
            $table->string('name_5');
            $table->string('fb_5');
            $table->string('image_5');
            $table->string('name_6');
            $table->string('fb_6');
            $table->string('image_6');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_trainers');
    }
};
