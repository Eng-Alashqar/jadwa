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
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->text('content_en');
            $table->text('content_ar');
            $table->string('jop_description_en');
            $table->string('jop_description_ar');
            $table->string('phone');
            $table->string('email');
            $table->string('image');
            $table->string('facebook');
            $table->string('linkedln');
            $table->string('twitter');
            $table->string('skay');
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
        Schema::dropIfExists('experts');
    }
};
