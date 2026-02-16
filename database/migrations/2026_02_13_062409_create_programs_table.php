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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('degree_type')->nullable(); // B.Tech, M.Tech
            $table->string('duration')->nullable(); // 4 Years
            $table->string('level')->nullable(); // Undergraduate, etc
            $table->text('overview')->nullable();

            $table->json('eligibility')->nullable();
            $table->json('curriculum_structure')->nullable();
            $table->json('highlights')->nullable();

            $table->string('featured_image')->nullable();
            $table->integer('total_seats')->nullable();
            $table->decimal('fee_min', 10, 2)->nullable();
            $table->decimal('fee_max', 10, 2)->nullable();

            $table->integer('order')->default(0);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
