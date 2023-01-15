<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('sid')->unique();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('legal_name')->unique();
            $table->string('legal_address')->nullable();
            $table->string('legal_contact')->nullable();
            $table->string('logo')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('website')->unique()->nullable();
            $table->enum('type', ['service', 'product', 'recruit']);
            $table->enum('size', ['xs', 'sm', 'md', 'lg', 'xl']);
            $table->dateTime('email_verified_at')->nullable();
            $table->dateTime('legal_verified_at')->nullable();
            $table->dateTime('phone_verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
