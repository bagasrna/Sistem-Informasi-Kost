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
    <div class="md:md:ml-[150px] mx-[80px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Menambahkan Penghuni</h1>

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
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : Jalan Sawojajar. . ."
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="hp" class="font-semibold mb-2">Masukkan Nomer Handphone :</label>
                    <input 
                        type="text" 
                        name="hp"
                        required
                        id="hp"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : 08223156729"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="kamar" class="font-semibold mb-2">Masukkan Kamar :</label>
                    <select type="text" required id="kamar" name="kamar" class="w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="1" name="kamar">Kamar 1</option>
                        <option value="2" name="kamar">Kamar 2</option>
                        <option value="3" name="kamar">Kamar 3</option>
                        <option value="4" name="kamar">Kamar 4</option>
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="diskon" class="font-semibold mb-2">Diskon :</label>
                    <select type="text" required id="diskon" name="diskon" class="w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="lantai">Pilih Diskon</option>
                        <option value="0" name="diskon" {{ $kamar->diskon == 0 ? 'selected' : '' }}>0%</option>
                        <option value="3" name="diskon" {{ $kamar->diskon == 3 ? 'selected' : '' }}>3%</option>
                        <option value="5" name="diskon" {{ $kamar->diskon == 5 ? 'selected' : '' }}>5%</option>
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="tarif" class="font-semibold mb-2">Masukkan Tanggal Registrasi :</label>
                    <input 
                        type="date" 
                        name="tgl_registrasi"
                        required
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