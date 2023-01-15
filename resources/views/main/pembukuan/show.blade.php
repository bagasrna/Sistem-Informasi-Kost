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
        <h1 class='font-bold text-[20px] lg:text-[30px] mt-[30px] md:mt-[90px]'>Menampilkan Pembukuan</h1>
        <h1 class='font-medium text-[15px] lg:text-[20px] my-[15px]'>Pada Bulan <span class="font-bold">{{ $bulan_awal }}</span> Tahun <span class="font-bold">{{ $tahun_awal }}</span> Sampai Bulan <span class="font-bold">{{ $bulan_awal }}</span> Tahun <span class="font-bold">{{ $tahun_akhir }}</span></h1>
        <div class="flex flex-row justify-end">
            <form action="/pembukuan/show" method="get">
                <input type="text" class="hidden" name="print" value="1">
                <input type="text" class="hidden" name="bulan_awal" value="{{ $bulan_awal }}">
                <input type="text" class="hidden" name="bulan_akhir" value="{{ $bulan_akhir }}">
                <input type="text" class="hidden" name="tahun_awal"value="{{ $tahun_awal }}">
                <input type="text" class="hidden" name="tahun_akhir"value="{{ $tahun_akhir }}">
                <button type="submit" class="flex flex-row gap-2 text-white bg-blue-500 hover:bg-blue-600 lg:p-3 p-2 text-[16px] rounded-lg">Print<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="xl:w-6 w-5 h-5 xl:h-6">
                    <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z" clip-rule="evenodd" /></svg></span></button>
            </form>
        </div>

        <div class="relative overflow-y-scroll md:overflow-hidden">
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
                    @forelse ($pembukuans as $pembukuan)

                    <tr class="bg-gray-200 border-b border-gray-400">
                        <td class="p-3 border-x border-gray-400 text-md text-gray-700">
                            {{ $loop->index + 1 }}.
                        </td>
                        <td class="p-3 border-r border-gray-400 text-md text-gray-700">
                            {{ $pembukuan->tgl_transaksi }}
                        </td>
                        <td class="p-3 border-r border-gray-400 text-md text-gray-700">
                            {{ $pembukuan->keterangan }}
                        </td>
                        <td class="p-3 border-r border-gray-400 text-center text-md text-gray-700">
                            @if($pembukuan->tipe == 0)
                                @currency($pembukuan->nominal)
                            @else
                                0
                            @endif
                        </td>
                        <td class="p-3 border-r text-center border-gray-400 text-md text-gray-700">
                            @if($pembukuan->tipe == 1)
                                @currency($pembukuan->nominal)
                            @else
                                0
                            @endif
                        </td>
                    </tr>
                    @empty
                        <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                            Data Belum Tersedia!
                        </div>
                    @endforelse
                </tbody>

                <tfoot>
                    <th colspan="3" class="p-3 text-md border bg-gray-600 text-white border-gray-400 font-semibold tracking-wide text-center">Total Saldo</th>
                    <th colspan="2" class="p-3 text-md border bg-gray-600 text-white border-gray-400 font-semibold tracking-wide text-center">@currency($saldo)</th>
                </tfoot>

                <tfoot>
                    <th colspan="3" class="p-3 text-md border bg-gray-600 text-white border-gray-400 font-semibold tracking-wide text-center">Total Kredit / Debit</th>
                    <th class="p-3 text-md border border-gray-400 bg-gray-600 text-white font-semibold tracking-wide text-center">@currency($total_debit)</th>
                    <th class="p-3 text-md border border-gray-400 bg-gray-600 text-white font-semibold tracking-wide text-center">@currency($total_kredit)</th>
                </tfoot>
            </table>
        </div>
        <div class="mt-[60px] flex justify-end">
            <a href="/pembukuan" class="p-2 px-5 text-white rounded-lg bg-green-500 hover:bg-green-600">Back</a>
        </div>
    </div>
    @include('layout.sidebar')
</body>
</html>