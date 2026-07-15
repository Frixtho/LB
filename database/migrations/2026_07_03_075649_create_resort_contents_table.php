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
        Schema::create('resort_contents', function (Blueprint $table) {
            $table->id();
            $table->string('location_address')->nullable();
            $table->string('whatsapp_1')->nullable();
            $table->string('whatsapp_2')->nullable();
            $table->string('whatsapp_3')->nullable();
            $table->string('email_address')->nullable();
            $table->text('map_iframe_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resort_contents');
    }
};
