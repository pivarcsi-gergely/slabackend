<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Token extends Migration
{
    public function up()
    {
        Schema::create('token', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('api_token', 80)->unique()->nullable()->default(null);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('token');
    }
}
