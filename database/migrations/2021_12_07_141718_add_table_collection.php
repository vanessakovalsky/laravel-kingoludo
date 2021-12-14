<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_jeu', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('collection_id');
            $table->foreign('collection_id')
                ->references('id')
                ->on('collections')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('jeu_id');
            $table->foreign('jeu_id')
                ->references('id')
                ->on('jeu_models')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
