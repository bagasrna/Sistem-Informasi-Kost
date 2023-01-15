<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kost</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="md:ml-[150px] md:w-1/2 w-3/4 mx-[80px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px] '>Pembukuan</h1>

        <div class='border-2 rounded-xl mt-[30px] shadow-lg border-gray-500'>
            <form action="/pembukuan/show" method="get" class="mx-[30px]">
                <div class="flex mt-[30px]">
                    <a href="/pembukuan/create"
                        class="text-center bg-[#22C55E] text-[13px] md:text-[14px] hover:bg-green-600 text-white p-3 rounded-xl shadow-sm ">Tambah Tagihan
                    </a>
                </div>
                <div class="mt-[30px] flex flex-row">
                    <select name="bulan_awal" class="w-[300px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="">Pilih Bulan Awal</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>

                    <h1 class="flex my-auto mx-[30px]">-</h1>

                    <select name="bulan_akhir" class="w-[300px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="">Pilih Bulan Akhir</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>

                <div class="my-[30px] flex flex-row">
                    <select name="tahun_awal" class="w-[300px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="">Pilih Tahun Awal</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2023">2024</option>
                        <option value="2025">2025</option>
                    </select>

                    <h1 class="flex my-auto mx-[30px]">-</h1>

                    <select name="tahun_akhir" class="w-[300px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="">Pilih Tahun Akhir</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2023">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>
                    <div class="flex justify-end mb-[30px]">
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-[13px] shadow-lg text-white p-3 rounded-lg">Cek Tagihan</button>
                    </div>
                
            </form>
        </div>
    </div>
    @include('layout.sidebar')
</body>
</html>