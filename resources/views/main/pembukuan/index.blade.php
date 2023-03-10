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
    <div class="md:ml-[150px] md:w-1/2 w-3/4 ml-[80px] mr-[30px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px] '>Pembukuan</h1>

        <div class='border-2 rounded-xl mt-[30px] shadow-lg border-gray-500'>
            <form action="/pembukuan/show" method="get" class="mx-[30px]">
                <div class="flex mt-[30px]">
                    <a href="/pembukuan/create"
                        class="text-center bg-[#22C55E] text-[13px] sm:text-[14px] hover:bg-green-600 text-white p-3 rounded-xl shadow-sm ">Tambah Tagihan
                    </a>
                </div>
                <div class="mt-[30px]  flex flex-col sm:flex-row">
                    <select name="bulan_awal" required class="w-full pl-3 focus:border-blue-400 text-[13px] sm:text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="">Pilih Bulan Awal</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>

                    <h1 class="flex mx-auto sm:my-auto my-3 sm:mx-[30px]">-</h1>

                    <select name="bulan_akhir" required class="w-full pl-3 focus:border-blue-400 text-[13px] sm:text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="">Pilih Bulan Akhir</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>

                <div class="sm:my-[30px] mt-[50px] flex flex-col sm:flex-row">
                    <select name="tahun_awal" required class="w-full pl-3 focus:border-blue-400 text-[13px] sm:text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="">Pilih Tahun Awal</option>
                        @foreach($years as $year)
                            <option value="{{ $year->year }}">{{ $year->year }}</option>
                        @endforeach
                    </select>

                    <h1 class="flex sm:my-auto mx-auto my-2 sm:mx-[30px]">-</h1>

                    <select name="tahun_akhir" required class="w-full pl-3 focus:border-blue-400 text-[13px] sm:text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="">Pilih Tahun Akhir</option>
                        @foreach($years as $year)
                            <option value="{{ $year->year }}">{{ $year->year }}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="flex justify-end my-[30px]">
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-[13px] sm:text-[14px] shadow-lg text-white p-3 rounded-lg">Cek Tagihan</button>
                    </div>
                
            </form>
        </div>
    </div>
    @include('layout.sidebar')
</body>
</html>