<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaTable extends Migration
{
    public function up()
    {
        Schema::create('penerima', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nik', 16)->unique();
            $table->text('alamat');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('no_telepon', 15)->nullable();
            $table->string('status_keluarga', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerima');
    }
};