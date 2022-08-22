<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedagangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedagang', function (Blueprint $table) {
            $table->id();
            $table->string('pedagang', 100);
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->bigInteger('telepon');
            $table->bigInteger('nik');
            $table->string('status_nikah');
            $table->text('alamat');
            $table->string('nama_usaha',100);
            $table->integer('wilayah_id');
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
        Schema::dropIfExists('pedagang');
    }
}
