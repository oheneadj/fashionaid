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
            $table->string('profile_picture')
                ->nullable();
            $table->string('name');
            $table->string('username')
                ->unique();;
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('location');
            $table->string('card_type')
                ->nullable();
            $table->string('card_number')
                ->nullable();
            $table->boolean('verified')
                ->default(false);
            $table->string('phone_number')
                ->nullable()
                ->unique();
            $table->timestamp('phone_number_verified_at')
                ->nullable();
            $table->string('user_type')
                ->nullable();
            $table->string('email')
                ->nullable()
                ->unique();
            $table->timestamp('email_verified_at')
                ->nullable();
            $table->string('password');
            $table->string('status')
                ->nullable();
            $table->rememberToken();
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
