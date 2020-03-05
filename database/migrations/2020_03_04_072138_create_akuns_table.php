<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akuns', function (Blueprint $table) {
            $table->id();
            $table->String('nama')->nullable();
            $table->String('email')->nullable();
            $table->String('tlp')->nullable();
            $table->unsignedBigInteger('id_profil');
            $table->foreign('id_profil')->references('id')
                    ->on('profils')->onDelete('cascade');
            $table->unsignedBigInteger('id_postingan');
            $table->foreign('id_postingan')->references('id')
                    ->on('postingans')->onDelete('cascade');
            $table->unsignedBigInteger('id_group');
            $table->foreign('id_group')->references('id')
                    ->on('groups')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akuns');
    }
}
