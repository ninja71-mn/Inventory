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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('subtype')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('detailed_title');
            $table->bigInteger('national_id')->nullable();
            $table->string('status');
            $table->string('website')->nullable();
            $table->string('email')->unique()->nullable();
            $table->bigInteger('economic_code')->nullable();
            $table->bigInteger('reg_no')->nullable();
            $table->text('note')->nullable();
            $table->unsignedBigInteger('creator');
            $table->unsignedBigInteger('updater')->nullable();
            $table->timestamps();

            $table->foreign('creator')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updater')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
