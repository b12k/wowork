<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->unique();
            $table->string('name');
            $table->string('surname');
            $table->enum('gender', ['m', 'f', 'x']);
            $table->bigInteger('phone')->unsigned()->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('birthday');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->timestamp('identity_verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
