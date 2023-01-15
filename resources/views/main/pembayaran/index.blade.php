<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kos</title>
    @vite('resources/css/app.css')
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
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px] '>Data Pembayaran Lunas</h1>

                <div class="flex flex-row gap-4 mt-[30px] mb-4">
                    <div>
                        <form action="/lunas" method="GET">
                            <input type="text" name="search"
                            class="bg-gray-200 p-2 rounded shadow-sm border placeholder:text-[14px] border-gray-200 focus:outline-none"
                            placeholder="Cari Data Lunas">
                            <button type="submit" class="bg-green-400 hover:bg-green-600 text-white p-3 text-[12px] md:text-[14px] rounded-lg">Search</button>
                        </form>
                    </div>
                </div>

        <div class="relative overflow-y-scroll">
            <table class="w-full mt-[10px]">
                @if(count($tagihans) > 0)
                <thead class="bg-gray-600 border-b-2 border-gray-200">
                    <tr class="text-white">
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">No.</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Nama</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Kode</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Kamar</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Tagihan</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Status</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Tanggal Lunas</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Aksi</th>
                    </tr>
                </thead>
                @endif

                <tbody>
                    @forelse ($tagihans as $tagihan)
                    <tr class="bg-gray-200 border-b border-gray-400">
                        <td class="p-3 border-x border-gray-400 text-sm lg:text-md text-gray-700">
                            {{ $loop->index + 1 }}.
                        </td>
                        <td class="p-3 border-r border-gray-400 text-sm lg:text-md text-gray-700">
                            {{ $tagihan->penghuni->nama }}
                        </td>
                        <td class="p-3 border-r border-gray-400 text-sm lg:text-md text-gray-700">
                            {{ $tagihan->penghuni->kode }}
                        </td>
                        <td class="p-3 border-r border-gray-400 text-sm lg:text-md text-gray-700">
                            {{ $tagihan->penghuni->kamar->kode }}
                        </td>
                        <td class="p-3 border-r border-gray-400 text-sm lg:text-md text-gray-700">
                            @currency($tagihan->tagihan)
                        </td>
                        <td class="p-3 border-r text-center border-gray-400 text-sm lg:text-md text-gray-700">
                            <span class="bg-blue-500 text-white p-2 px-5 rounded-2xl">Lunas</span>
                        </td>
                        <td class="p-3 border-r border-gray-400 text-sm lg:text-md text-gray-700">
                            {{ $tagihan->updated_at}}
                        </td>
                        <td class="flex border-r border-gray-400 flex-row p-5 xl:p-3 text-sm lg:text-md text-gray-700">
                            <a href="/struk/{{ $tagihan->id }}" target="blank" class="bg-indigo-500 text-white lg:px-2 px-3 py-3 lg:py-1 rounded-lg hover:bg-indigo-600 focus:outline-none ml-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="xl:w-6 w-8 h-8 xl:h-6">
                                <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z" clip-rule="evenodd" /></svg></a>
                        </td>
                    </tr>
                    @empty
                        <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                            Data Tidak Ditemukan!
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-2">
            {{ $tagihans->links('vendor.pagination.tailwind') }}
        </div>
    </div>
    @include('layout.sidebar')
    @include('sweetalert::alert')
</body>
</html>