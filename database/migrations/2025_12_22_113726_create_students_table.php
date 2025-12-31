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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth'); 
            $table->bigInteger('level_id')->unsigned(); 
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->string('parent_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
