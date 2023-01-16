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
<body onload="print()">
    <div class="md:ml-[150px] ml-[80px] mr-[30px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Pembukuan</h1>
        <h1 class='font-medium text-[20px] my-[15px]'>Pada Bulan <span class="font-bold">{{ $bulan_awal }}</span> Tahun <span class="font-bold">{{ $tahun_awal }}</span> Sampai Bulan <span class="font-bold">{{ $bulan_akhir }}</span> Tahun <span class="font-bold">{{ $tahun_akhir }}</span></h1>

        <table class="w-full mt-[10px]">

            <thead>
                <tr class="text-white">
                    <th rowspan="2" class="p-3 border border-black text-black text-lg font-semibold tracking-wide text-center">No.</th>
                    <th rowspan="2" class="p-3 text-lg border border-black text-black font-semibold tracking-wide text-center">Tanggal</th>
                    <th rowspan="2" class="p-3 text-lg border border-black text-black font-semibold tracking-wide text-center">Keterangan</th>
                    <th colspan="3" class="p-3 text-center border border-black text-black text-lg font-semibold tracking-wide">Transaksi</th>
                </tr>

                <tr class="text-white">
                    <th class="p-3 text-lg border border-black text-black font-semibold tracking-wide text-center">Debit</th>
                    <th class="p-3 text-lg border border-black text-black font-semibold tracking-wide text-center">Kredit</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($pembukuans as $pembukuan)

                <tr class="border-b border-black">
                    <td class="p-3 border-x border-black text-md text-black">
                        {{ $loop->index + 1 }}.
                    </td>
                    <td class="p-3 border-r border-black text-md text-black">
                        {{ $pembukuan->tgl_transaksi }}
                    </td>
                    <td class="p-3 border-r border-black text-md text-black">
                        {{ $pembukuan->keterangan }}
                    </td>
                    <td class="p-3 border-r border-black text-center text-md text-black">
                        @if($pembukuan->tipe == 0)
                            @currency($pembukuan->nominal)
                        @else
                            0
                        @endif
                    </td>
                    <td class="p-3 border-r text-center border-black text-md text-black">
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
                <th colspan="3" class="p-3 text-md border border-black font-semibold tracking-wide text-center">Total Saldo</th>
                <th colspan="2" class="p-3 text-md border border-black font-semibold tracking-wide text-center">@currency($saldo)</th>
            </tfoot>

            <tfoot>
                <th colspan="3" class="p-3 text-md border border-black font-semibold tracking-wide text-center">Total Kredit / Debit</th>
                <th class="p-3 text-md border border-black font-semibold tracking-wide text-center">@currency($total_debit)</th>
                <th class="p-3 text-md border border-black font-semibold tracking-wide text-center">@currency($total_kredit)</th>
            </tfoot>
        </table>
    </div>
</body>
</html>