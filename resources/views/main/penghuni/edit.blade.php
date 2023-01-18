<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://i.ibb.co/vHqs58z/icons8-home-page-100.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kos</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="md:ml-[150px] sm:mx-[80px] ml-[80px] mr-[30px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Mengubah Penghuni</h1>

        <div class='border-2 rounded-xl mt-[30px] shadow-lg border-gray-500'>
            <form action="/penghuni/update" method="POST" class="ml-[30px]" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $penghuni->id }}" name="id">
                <div class="mt-[30px] flex flex-col">
                    <label for="nama" class="font-semibold mb-2">Kode :</label>
                    <input 
                        type="text" 
                        name="kode" 
                        id="kode" 
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        required
                        value="{{$penghuni->kode}}"
                        placeholder="Contoh : P001"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="nama" class="font-semibold mb-2">Nama :</label>
                    <input 
                        type="text" 
                        name="nama" 
                        id="nama" 
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        required
                        value="{{$penghuni->nama}}"
                        placeholder="Contoh : Budi"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="alamat" class="font-semibold mb-2">Alamat :</label>
                    <input 
                        type="text" 
                        name="alamat"
                        id="alamat"
                        value="{{$penghuni->alamat}}"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : Jalan Sawojajar. . ."
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="hp" class="font-semibold mb-2">Nomer Handphone (62) :</label>
                    <input 
                        type="text" 
                        name="hp"
                        required
                        id="hp"
                        value="{{$penghuni->hp}}"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : 628223156729"
                        >
                        @error('hp')
                        <div class="invalid-feedback text-red-600 text-[14px] mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="kamar" class="font-semibold mb-2">Kamar :</label>
                    <select type="text" required id="kamar" name="id_kamar" class="w-1/2 pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="id_kamar">Pilih Kamar</option>
                        @foreach ($kamars as $kamar)
                            <option value="{{ $kamar->id }}" name="id_kamar" {{ $id_kamar_penghuni == $kamar->id ? 'selected' : '' }}>
                                Kamar {{ $kamar->kode }} @foreach ($kamar->penghunis as $penghuni) | {{ $penghuni->nama }} @endforeach
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="durasi" class="font-semibold mb-2">Durasi :</label>
                    <select type="text" required id="durasi" name="durasi" class="w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="durasi">Pilih Durasi</option>
                        <option value="3" name="durasi" {{ $durasi_penghuni == 3 ? 'selected' : '' }}>3 Bulan</option>
                        <option value="6" name="durasi" {{ $durasi_penghuni == 6 ? 'selected' : '' }}>6 Bulan</option>
                        <option value="12" name="durasi" {{ $durasi_penghuni == 12 ? 'selected' : '' }}>12 Bulan</option>
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="diskon" class="font-semibold mb-2">Diskon :</label>
                    <select type="text" required id="diskon" name="diskon" class="w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="lantai">Pilih Diskon</option>
                        <option value="0" name="diskon" {{ $diskon_penghuni == 0 ? 'selected' : '' }}>0%</option>
                        <option value="3" name="diskon" {{ $diskon_penghuni == 3 ? 'selected' : '' }}>3%</option>
                        <option value="5" name="diskon" {{ $diskon_penghuni == 5 ? 'selected' : '' }}>5%</option>
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="tarif" class="font-semibold mb-2">Tanggal Registrasi :</label>
                    <input 
                        type="date" 
                        name="tgl_registrasi"
                        required
                        value="{{$tgl_registrasi_penghuni}}"
                        id="tgl_registrasi"
                        class="border-2 rounded-lg w-1/4 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : 300000"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="ktp" class="font-semibold mb-2">Upload KTP (Jika Ubah KTP) :</label>
                    <input 
                        type="file" 
                        name="ktp"
                        value="{{ $penghuni->ktp }}"
                        id="ktp"
                        class="w-4/5 outline-none focus:border-blue-400 py-2 text-[14px]"
                        >
                </div>

                <button type="submit" class="my-[30px] font-semibold text-white shadow-xl bg-[#22C55E] hover:bg-[#229a4e] p-2 px-7 rounded-xl">SUBMIT</button>
            </form>
        </div>
        <div class="flex justify-end py-[50px]">
            <a href="/penghuni" class="p-2 px-5 text-white rounded-lg bg-blue-500 hover:bg-blue-600">Back</a>
        </div>
    </div>
    @include('layout.sidebar')
    @include('sweetalert::alert')
</body>
</html>