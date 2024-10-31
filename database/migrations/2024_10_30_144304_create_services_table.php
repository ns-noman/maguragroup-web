<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('service_type_id');
            $table->integer('pn')->default(0);
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by_id')->nullbale();
            $table->integer('updated_by_id')->nullbale();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
