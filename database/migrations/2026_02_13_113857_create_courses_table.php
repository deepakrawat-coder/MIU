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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('semester');
            $table->integer('year');
            $table->integer('credits');
            $table->enum('type', ['core', 'elective', 'laboratory', 'project', 'internship']);
            $table->json('prerequisites')->nullable();
            $table->json('syllabus')->nullable();
            $table->json('learning_outcomes')->nullable();
            $table->json('resources')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
