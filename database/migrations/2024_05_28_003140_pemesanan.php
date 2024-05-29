<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->integer('id_pemesanan',true,false)->nullable(false);
            $table->string('nama_pemesan',200)->nullable(false)->unique('IdxPemesan');
            $table->string('nama_pengantin_pria',200)->nullable(false);
            $table->string('nama_pengantin_wanita',200)->nullable(false);
            $table->string('pria_anak_dari',200)->nullable(false);
            $table->string('wanita_anak_dari',200)->nullable(false);
            $table->string('nomor_rekening',200)->nullable();   
            $table->string('alamat_resepsi',400)->nullable(false);
            $table->date('tanggal_pernikahan')->nullable(false);
            $table->enum('status',['Belum Bayar','Dalam Proses','Selesai'])->default('Belum bayar')->nullable(false);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('pemesanan', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });

    }
};
