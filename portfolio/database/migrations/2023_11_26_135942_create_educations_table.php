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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(false);
            $table->string('education_degree')->nullable(false);
            $table->string('institute_name')->nullable(true);
            $table->year('year_of_pass')->nullable(false);
            $table->string('grade')->nullable(true);
            $table->string('location')->nullable(true);
            $table->unique(['user_id','education_degree','year_of_pass'],'educationforuser');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
