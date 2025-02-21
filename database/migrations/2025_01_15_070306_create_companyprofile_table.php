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
        Schema::create('companyprofile', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slogan');
            $table->text('history');
            $table->text('vision');
            $table->text('mission');
            $table->string('email');
            $table->text('instagram');
            $table->text('whatsapp');
            $table->text('tiktok');
            $table->text('address');
            $table->text('map');
            $table->string('logo');
            $table->string('logo_type');
            $table->string('logo_mark');
            $table->string('advertisement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companyprofile');
    }
};
