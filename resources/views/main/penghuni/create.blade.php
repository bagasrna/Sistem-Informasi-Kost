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
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Menambahkan Penghuni</h1>

        <div class='border-2 rounded-xl mt-[30px] shadow-lg border-gray-500'>
            <form action="/penghuni/create" method="POST" class="ml-[30px]" enctype="multipart/form-data">
                @csrf
                <div class="mt-[30px] flex flex-col">
                    <label for="kode" class="font-semibold mb-2">Kode Penghuni :</label>
                    <input 
                        type="text" 
                        name="kode"
                        required
                        value="{{ old('kode')}}"
                        id="kode"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : P001"
                        >
                    @error('kode')
                        <div class="invalid-feedback text-red-600 text-[14px] mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="nama" class="font-semibold mb-2">Nama :</label>
                    <input 
                        type="text" 
                        name="nama"
                        value="{{ old('nama')}}" 
                        id="nama" 
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        required
                        placeholder="Contoh : Budi"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="alamat" class="font-semibold mb-2">Alamat :</label>
                    <input 
                        type="text" 
                        name="alamat"
                        value="{{ old('alamat')}}"
                        required
                        id="alamat"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : Jalan Sawojajar. . ."
                        >
                        @error('alamat')
                        <div class="invalid-feedback text-red-600 text-[14px] mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="hp" class="font-semibold mb-2">Nomer Handphone (62) :</label>
                    <input 
                        type="text" 
                        name="hp"
                        value="{{ old('hp')}}"
                        required
                        id="hp"
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
                    <select type="text" value="{{ old('id_kamar')}}" required id="kamar" name="id_kamar" class="w-4/5 sm:w-1/2 pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="id_kamar">Pilih Kamar</option>
                        @foreach ($kamars as $kamar)
                            <option value="{{ $kamar->id }}" {{ old('id_kamar') == $kamar->id ? 'selected' : '' }} name="id_kamar">
                                Kamar {{ $kamar->kode }} @foreach ($kamar->penghunis as $penghuni) | {{ $penghuni->nama }} @endforeach
                            </option>
                        @endforeach
                    </select>
                    @error('id_kamar')
                        <div class="invalid-feedback">{{ $errors->first('id_kamar') }}</div>
                    @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="durasi" class="font-semibold mb-2">Durasi :</label>
                    <select type="text" required id="durasi" name="durasi" class="w-4/5 sm:w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="durasi">Pilih Durasi</option>
                        <option value="3" {{ old('durasi') == "3" ? 'selected' : '' }} name="durasi">3 bulan</option>
                        <option value="6" {{ old('durasi') == "6" ? 'selected' : '' }} name="durasi">6 bulan</option>
                        <option value="12" {{ old('durasi') == "12" ? 'selected' : '' }} name="durasi">12 bulan</option>
                    </select>
                    @error('durasi')
                        <div class="invalid-feedback">{{ $errors->first('durasi') }}</div>
                    @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="diskon" class="font-semibold mb-2">Diskon :</label>
                    <select type="text" required id="diskon" name="diskon" class="w-4/5 sm:w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="diskon">Pilih Diskon</option>
                        <option value="0" {{ old('diskon') == "0" ? 'selected' : '' }} name="diskon">0%</option>
                        <option value="3" {{ old('diskon') == "3" ? 'selected' : '' }} name="diskon">3%</option>
                        <option value="5" {{ old('diskon') == "5" ? 'selected' : '' }} name="diskon">5%</option>
                    </select>
                    @error('diskon')
                        <div class="invalid-feedback">{{ $errors->first('diskon') }}</div>
                    @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="tgl_registrasi" class="font-semibold mb-2">Masukkan Tanggal Registrasi :</label>
                    <input 
                        type="date" 
                        name="tgl_registrasi"
                        required
                        value="{{ old('tgl_registrasi')}}"
                        id="tgl_registrasi"
                        class="border-2 rounded-lg w-4/5 sm:w-1/4 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : 300000"
                        >
                        @error('tgl_registrasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="ktp" class="font-semibold mb-2">Upload KTP :</label>
                    <input 
                        type="file" 
                        name="ktp"
                        required
                        value="{{ old('ktp')}}"
                        id="ktp"
                        class="w-4/5 outline-none focus:border-blue-400 py-2 text-[14px]"
                        >
                        @error('ktp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                </div>

                <button type="submit" class="my-[30px] font-semibold text-white shadow-xl bg-[#22C55E] hover:bg-[#229a4e] p-2 px-7 rounded-xl">SUBMIT</button>
            </form>
        </div>
        <div class=" flex justify-end py-[50px]">
            <a href="/penghuni" class="p-2 px-5 text-white rounded-lg bg-blue-500 hover:bg-blue-600">Back</a>
        </div>
    </div>
    @include('layout.sidebar')
    @include('sweetalert::alert')
</body>
</html>