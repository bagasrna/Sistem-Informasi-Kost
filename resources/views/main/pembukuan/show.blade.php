<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kos</title>
    <style>
        tr:nth-child(even) td {
            background: #CDD5DF;
            border: 
    }

        tr:nth-child(odd) td {
            background: #EEF2F6;
    }
    </style>
</head>
<body>
    <div class="md:ml-[150px] mx-[80px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Menampilkan Pembukuan</h1>
        <h1 class='font-medium text-[20px] my-[15px]'>Pada Bulan <span class="font-bold">Maret</span> Tahun <span class="font-bold">2022</span></h1>

        <table class="w-full mt-[10px]">

            <thead class="bg-gray-600 border-b-2 border-gray-200">
                <tr class="text-white">
                    <th rowspan="2" class="p-3 border border-gray-400 text-lg font-semibold tracking-wide text-center">No.</th>
                    <th rowspan="2" class="p-3 text-lg border border-gray-400 font-semibold tracking-wide text-center">Tanggal</th>
                    <th rowspan="2" class="p-3 text-lg border border-gray-400 font-semibold tracking-wide text-center">Keterangan</th>
                    <th colspan="3" class="p-3 text-center border border-gray-400 text-lg font-semibold tracking-wide">Transaksi</th>
                </tr>

                <tr class="text-white">
                    <th class="p-3 text-lg border border-gray-400 font-semibold tracking-wide text-center">Debit</th>
                    <th class="p-3 text-lg border border-gray-400 font-semibold tracking-wide text-center">Kredit</th>
                </tr>
            </thead>

            <tbody>


                <tr class="bg-gray-200 border-b border-gray-400">
                    <td class="p-3 border-x border-gray-400 text-md text-gray-700">
                        1
                    </td>
                    <td class="p-3 border-r border-gray-400 text-md text-gray-700">
                        2022-12-20
                    </td>
                    <td class="p-3 border-r border-gray-400 text-md text-gray-700">
                        Membayar tagihan listrik
                    </td>
                    <td class="p-3 border-r border-gray-400 text-center text-md text-gray-700">
                        Rp. 200.000
                    </td>
                    <td class="p-3 border-r text-center border-gray-400 text-md text-gray-700">
                        Rp. 0
                    </td>
                </tr>

                    <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                        Data Belum Tersedia!
                    </div>

            </tbody>

            <tfoot>
                <td colspan="3" class="p-3 text-md border border-gray-400 font-semibold tracking-wide text-center">Total Saldo</td>
                <td colspan="2" class="p-3 text-md border border-gray-400 font-semibold tracking-wide text-center">Rp. 200.000</td>
            </tfoot>

            <tfoot>
                <td colspan="3" class="p-3 text-md border border-gray-400 font-semibold tracking-wide text-center">Total Kredit / Debit</td>
                <td class="p-3 text-md border border-gray-400 font-semibold tracking-wide text-center">Rp. 200.000</td>
                <td class="p-3 text-md border border-gray-400 font-semibold tracking-wide text-center">Rp. 0</td>
            </tfoot>
        </table>
        <div class="mt-[60px] flex justify-end">
            <a href="/pembukuan" class="p-2 px-5 text-white rounded-lg bg-green-500 hover:bg-green-600">Back</a>
        </div>
    </div>
    @include('layout.sidebar')
</body>
</html>