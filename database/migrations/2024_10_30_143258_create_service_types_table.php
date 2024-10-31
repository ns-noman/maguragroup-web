<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('service_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('icon');
            $table->tinyInteger('is_in_home')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by_id')->nullbale();
            $table->integer('updated_by_id')->nullbale();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('service_types');
    }
};
