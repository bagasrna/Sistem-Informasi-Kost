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
            <form action="/pembukuan/show" method="get" class="ml-[30px]">
                <div class="flex mt-[30px]">
                    <a href="/pembukuan/create"
                        class="text-center bg-[#22C55E] text-[13px] md:text-[14px] hover:bg-green-600 text-white p-3 rounded-xl shadow-sm ">Tambah Tagihan
                    </a>
                </div>
                <div class="mt-[30px] flex flex-col">
                    <select name="bulan" id="bulan" class="w-[300px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="">Pilih Bulan</option>
                        <option id="bulan" value="1">Januari</option>
                        <option id="bulan" value="2">Februari</option>
                        <option id="bulan" value="3">Maret</option>
                        <option id="bulan" value="4">April</option>
                        <option id="bulan" value="5">Mei</option>
                        <option id="bulan" value="6">Juni</option>
                        <option id="bulan" value="7">Juli</option>
                        <option id="bulan" value="8">Agustus</option>
                        <option id="bulan" value="9">September</option>
                        <option id="bulan" value="10">Oktober</option>
                        <option id="bulan" value="11">November</option>
                        <option id="bulan" value="12">Desember</option>
                    </select>
                </div>

                <div class="my-[30px] flex flex-row">
                    <select name="tahun" id="bulan" class="w-[300px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option id="tahun" value="">Pilih Tahun</option>
                        <option id="tahun" value="2022">2022</option>
                        <option id="tahun" value="2023">2023</option>
                        <option id="tahun" value="2023">2024</option>
                        <option id="tahun" value="2025">2025</option>
                    </select>

                    <div class="flex ml-[30px]">
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-[13px] shadow-lg text-white p-3 rounded-lg">Cek Tagihan</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <script src="../../../js/index.js"></script>
    @include('layout.sidebar')
</body>
</html>