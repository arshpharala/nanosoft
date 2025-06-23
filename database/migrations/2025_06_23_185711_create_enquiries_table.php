<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('company')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->text('message')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->timestamps();

            // Optionally, if you want to keep foreign key constraint
            // $table->foreign('service_id')->references('id')->on('services')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
}
