<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Token extends Migration
{
    public function up(){
        Schema::create('token', function (Blueprint $table) {
            $table->integer('userid')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('api_token', 80)->unique()->nullable()->default(null);
        });
    }
    public function down() {
        Schema::dropIfExists('token');
    }
}
