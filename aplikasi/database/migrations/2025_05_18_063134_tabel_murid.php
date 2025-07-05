<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('murid', function (Blueprint $table) {
            $table->id();
            $table->string('tanggaldaftar', 10);
            $table->string('nama', 10);
            $table->string('jeniskelamin', 20);
            $table->string('nisn', 20);
            $table->string('tahunajaran', 20);
            $table->string('nik', 20);
            $table->string('nokk', 20);
            $table->string('tempatlahir', 10);
            $table->string('tanggallahir', 20);
            $table->string('noregistrasiakte', 10);
            $table->string('agama', 10);
            $table->string('kewarganegaraan', 10);
            $table->string('kebutuhankusus', 20);
            $table->string('jenjangtingkat', 10);
            $table->string('alamat', 10);
            $table->string('rt', 10); 
            $table->string('rw', 10); 
            $table->string('namadusun', 20); 
            $table->string('kelurahan', 20); 
            $table->string('kecamatan', 20); 
            $table->string('kodepos', 10); 
            $table->string('tempattinggal', 10);
            $table->string('transportasi', 10);
            $table->string('anakke', 10); 
            $table->string('penerimakps', 10);
            $table->string('kip', 10);
            $table->string('mendapatpip', 10); 
            $table->string('alasanpip', 10); 
            $table->string('foto', 10);
            $table->string('fotokk', 10); 
            $table->string('fotoakte', 10); 
            $table->string('fotoktp', 10); 
            $table->string('fotokelulusan', 10); 
            $table->string('fotosuratpindah', 10); 
            $table->string('status', 10);
            $table->string('namaayah', 10); 
            $table->string('nikayah', 10); 
            $table->string('tahunlahirayah', 10);
            $table->string('pendidikanayah', 10);
            $table->string('pekerjaanayah', 10); 
            $table->string('penghasilanayah', 10);
            $table->string('kebutuhankususayah', 10);
            $table->string('namaibu', 10);
            $table->string('nikibu', 10);
            $table->string('tahunlahiribu', 10);
            $table->string('pendidikanibu', 10);
            $table->string('pekerjaanibu', 10);
            $table->string('penghasilanibu', 10);
            $table->string('kebutuhankususibu', 10);
            $table->string('namawali', 10);
            $table->string('nikwali', 10);
            $table->string('tahunlahirwali', 10);
            $table->string('pendidikanwali', 10);
            $table->string('pekerjaanwali', 10);
            $table->string('penghasilanwali', 10); 
            $table->string('kebutuhankususwali', 10); 
            $table->string('nohp', 10); 
            $table->string('email', 10);
            $table->string('tinggibadan', 10); 
            $table->string('beratbadan', 10); 
            $table->string('lingkarkepala', 10); 
            $table->string('jaraktempuh', 10); 
            $table->string('waktutempuh', 10); 
            $table->string('jumlahsaudara', 10);
            $table->string('namalomba', 10);
            $table->string('jenislomba', 10); 
            $table->string('tingkat', 10);
            $table->string('tahun', 10);
            $table->string('penyelengara', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murid');
    }
};
