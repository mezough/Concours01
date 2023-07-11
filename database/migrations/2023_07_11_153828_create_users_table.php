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
            // $table->unsignedBigInteger('id_Role')->nullable();
            // $table->foreign('id_Role')->references('id')->on('roles')->onDelete('CASCADE')->onUpdate('CASCADE');        
            $table->string('img_profile')->nullable();
            $table->string('fname');
            $table->string('email');
            $table->string('password');
            $table->integer('role');
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
