<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    protected $table = 'pengantin';
    public function up(): void
    {
        //
        Schema::create($this->table,function(Blueprint $table){
            $table->integer('id_pengantin',10,true,false)->nullable(false);
            $table->string('nama_pengantin_pria',200)->nullable(false);
            $table->string('nama_pengantin_wanita',200)->nullable(false);
            $table->string('pria_anak_dari',400)->nullable(false);
            $table->string('wanita_anak_dari',400)->nullable(false);
            $table->string('nomor_rekening',200)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
