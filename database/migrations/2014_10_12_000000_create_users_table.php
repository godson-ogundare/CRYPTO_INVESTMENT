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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('invested')->default('0.00');
            $table->string('interest')->default('0.00');
            $table->string('progress')->default('0.00');
            $table->string('status')->default('Pending');
            $table->string('btc_code')->default('16h1FFqY4WbEH5Uhr7MEJZpd7jZWAU41Hj');
            $table->string('btc_html')->default('https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=16h1FFqY4WbEH5Uhr7MEJZpd7jZWAU41Hj');
            $table->string('ltc_code')->default('16h1FFqY4WbEH5Uhr7MEJZpd7jZWAU41Hj');
            $table->string('ltc_html')->default('https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=16h1FFqY4WbEH5Uhr7MEJZpd7jZWAU41Hj');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
