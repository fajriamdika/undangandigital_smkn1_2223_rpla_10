<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $table = 'pemesanan';
    public function up(): void
    {
        //
        Schema::create($this->table,function(Blueprint $table){
            $table->integer('id_pemesanan',true, false)->nullable(false);
            $table->string('nama_pemesan',200)->nullable(false);
            $table->string('alamat_akad',400)->nullable(false);
            $table->string('alamat_resepsi',400)->nullable(false);
            $table->date('tanggal_pernikahan')->nullable(false);
            $table->timestamp('tanggal_pemesanan');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists($this->table);

    }
};
