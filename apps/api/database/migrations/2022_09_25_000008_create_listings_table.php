<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->morphs('creator');
            $table->string('sid')->unique();
            $table->enum('type', ['profile', 'vacancy']);
            $table->string('title_en')->nullable();
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('description_en')->nullable();
            $table->string('description_de')->nullable();
            $table->string('description_fr')->nullable();
            $table->unsignedInteger('salary_min');
            $table->unsignedInteger('salary_max');
            $table->boolean('is_permanent_employment');
            $table->enum('workload', [0.2, 0.4, 0.6, 0.8, 1]);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('listings');
    }
};
