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
        Schema::create('advisors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('name_ar');
            $table->string('slug');
            $table->text('description');
            $table->text('description_ar');
            $table->string('insta');
            $table->string('feac');
            $table->string('twit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advisors');
    }
};