<?php

use App\Models\Card;
use App\Models\Game;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deck', function (Blueprint $table) {
            $table->foreignIdFor(Game::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Card::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            //$table->integer('gameid')->references('id')->on('game')->onUpdate('cascade')->onDelete('cascade');
            //$table->integer('cardid')->references('id')->on('cards')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deck');
    }
}
