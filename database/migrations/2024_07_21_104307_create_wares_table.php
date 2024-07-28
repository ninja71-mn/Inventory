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
        Schema::create('wares', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->unsignedBigInteger('warecategory_id');
            $table->unsignedBigInteger('warehouse_id');
            $table->text('description')->nullable();
            $table->unique('warecategory_id', 'name');
            $table->unsignedBigInteger('creator');
            $table->unsignedBigInteger('updater')->nullable();
            $table->timestamps();


            $table->foreign('warecategory_id')->references('id')->on('warecategories')->onDelete('cascade');
            $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');
            $table->foreign('creator')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updater')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wares');
    }
};
