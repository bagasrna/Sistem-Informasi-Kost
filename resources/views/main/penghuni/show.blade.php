<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://i.ibb.co/vHqs58z/icons8-home-page-100.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kost</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="md:ml-[150px] mx-[80px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Tampilan Data Penghuni</h1>

        <div class='border-2 rounded-xl mt-[30px] shadow-lg border-gray-500'>
            <div class="ml-[30px] my-[30px]">
                <h1>Kode Penghuni : <span class="font-bold">{{ $penghuni->kode }}</span></h1>
                <h1 class="my-[20px]">Nama : <span class="font-bold">{{ $penghuni->nama }}</span></h1>
                <h1 class="my-[20px]">Kamar Kos : <span class="font-bold">{{$penghuni->id_kamar}}</span></h1>
                <h1>Alamat Penghuni : <span class="font-bold">{{$penghuni-> alamat}}</span></h1>
                <h1 class="my-[20px]">Nomer Handphone : <span class="font-bold">{{$penghuni->hp}}</span></h1>
                <h1>Durasi Kos : <span class="font-bold">{{$penghuni->durasi}} Bulan</span></h1>
                <h1 class="my-[20px]">Diskon : <span class="font-bold">{{$penghuni->diskon}}%</span></h1>
                <h1>Kamar Kos : <span class="font-bold">{{$penghuni->tgl_registrasi}}</span></h1>
                <h1 class="my-[20px]">Foto KTP : <a href="{{ asset('storage/' . $penghuni->ktp) }}" target="_blank" class="bg-teal-500 ml-[20px] text-white lg:px-5 px-1 py-2 rounded-lg">KTP</a></h1>
            </div>
        </div>
    </div>
    @include('layout.sidebar')
</body>
</html>