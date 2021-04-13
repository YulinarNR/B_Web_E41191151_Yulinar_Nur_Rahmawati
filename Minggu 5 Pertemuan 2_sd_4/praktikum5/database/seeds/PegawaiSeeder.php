<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            'nama_pegawai' => 'Linar',
            'jabatan_pegawai' => 'Web Developer',
            'umur_pegawai' => 19,
            'alamat_pegawai' => 'Jl. Anggrek'
        ]);
    }
}
