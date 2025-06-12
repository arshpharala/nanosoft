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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();

            // Who performed the action
            $table->unsignedBigInteger('action_by')->nullable(); // nullable if system action
            $table->string('action'); // Created, Updated, Deleted, etc.

            // Change summary (optional: use JSON if complex)
            $table->text('details')->nullable();

            // Polymorphic fields
            $table->unsignedBigInteger('loggable_id');
            $table->string('loggable_type');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
