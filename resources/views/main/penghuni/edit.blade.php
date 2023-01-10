<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kos</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="md:ml-[150px] mx-[80px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Mengubah Penghuni</h1>

        <div class='border-2 rounded-xl mt-[30px] shadow-lg border-gray-500'>
            <form action="/edit" method="POST" class="ml-[30px]">
                <div class="mt-[30px] flex flex-col">
                    <label for="nama" class="font-semibold mb-2">Masukkan Nama :</label>
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
                    <label for="alamat" class="font-semibold mb-2">Masukkan Alamat :</label>
                    <input 
                        type="text" 
                        name="alamat"
                        required
                        id="alamat"
                        value="{{$penghuni->alamat}}"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : Jalan Sawojajar. . ."
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="hp" class="font-semibold mb-2">Masukkan Nomer Handphone (62) :</label>
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
                    <label for="durasi" class="font-semibold mb-2">Diskon :</label>
                    <select type="text" required id="durasi" name="durasi" class="w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="lantai">Pilih Diskon</option>
                        <option value="3" name="durasi" {{ $penghuni->durasi == 3 ? 'selected' : '' }}>3 Bulan</option>
                        <option value="6" name="durasi" {{ $penghuni->durasi == 6 ? 'selected' : '' }}>6 Bulan</option>
                        <option value="12" name="durasi" {{ $penghuni->durasi == 12 ? 'selected' : '' }}>12 Bulan</option>
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="diskon" class="font-semibold mb-2">Diskon :</label>
                    <select type="text" required id="diskon" name="diskon" class="w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="lantai">Pilih Diskon</option>
                        <option value="0" name="diskon" {{ $penghuni->diskon == 0 ? 'selected' : '' }}>0%</option>
                        <option value="3" name="diskon" {{ $penghuni->diskon == 3 ? 'selected' : '' }}>3%</option>
                        <option value="5" name="diskon" {{ $penghuni->diskon == 5 ? 'selected' : '' }}>5%</option>
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="tarif" class="font-semibold mb-2">Masukkan Tanggal Registrasi :</label>
                    <input 
                        type="date" 
                        name="tgl_registrasi"
                        required
                        value="{{$penghuni->tgl_registrasi}}"
                        id="tgl_registrasi"
                        class="border-2 rounded-lg w-1/4 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : 300000"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="ktp" class="font-semibold mb-2">Upload KTP :</label>
                    <input 
                        type="file" 
                        name="ktp"
                        required
                        value="{{ asset('storage/' . $penghuni->ktp) }}"
                        id="ktp"
                        class="w-4/5 outline-none focus:border-blue-400 py-2 text-[14px]"
                        >
                </div>

                <button type="submit" class="my-[30px] font-semibold text-white shadow-xl bg-[#22C55E] p-2 px-7 rounded-xl">SUBMIT</button>
            </form>
        </div>
    </div>
    @include('layout.sidebar')
    @include('sweetalert::alert')
</body>
</html>