<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogBantuanTable extends Migration
{
    public function up()
    {
        Schema::create('log_bantuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemberian_bantuan_id')->constrained('pemberian_bantuan')->onDelete('cascade');
            $table->timestamp('tanggal_log')->useCurrent();
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('log_bantuan');
    }
};
