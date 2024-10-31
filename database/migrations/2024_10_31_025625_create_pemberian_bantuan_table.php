<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemberianBantuanTable extends Migration
{
    public function up()
    {
        Schema::create('pemberian_bantuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penerima_id')->constrained('penerima')->onDelete('cascade');
            $table->foreignId('bantuan_id')->constrained('jenis_bantuan')->onDelete('cascade');
            $table->date('tanggal_pemberian');
            $table->decimal('jumlah_bantuan', 10, 2);
            $table->enum('status', ['Diberikan', 'Ditunda', 'Dibatalkan'])->default('Diberikan');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemberian_bantuan');
    }
};