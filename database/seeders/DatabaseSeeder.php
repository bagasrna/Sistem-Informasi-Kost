<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Penghuni;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);

        Kamar::create([
            'kode' => 'K001',
            'lantai' => 1,
            'kapasitas' => 1,
            'fasilitas' => 'Lemari, Kasur, Bantal',
            'tarif' => 500000,
        ]);

        Penghuni::create([
            'nama' => 'Bagas Raditya',
            'kode' => 'P001',
            'alamat' => 'Jalan Panjaitan Gg.13',
            'durasi' => 3,
            'diskon' => 0,
            'status' => 1,
            'hp' => '6282234018230',
            'tgl_registrasi' => '2023-01-26',
            'id_kamar' => 1,
            'ktp' => 'ktp/awikwok',
        ]);
    }
}
