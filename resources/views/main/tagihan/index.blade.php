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
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px] '>Data Tagihan</h1>

                <div class="flex flex-row gap-4 mt-[30px] mb-4">
                    <div>
                        <form action="tagihan" method="GET">
                            <input type="text" name="search"
                            class="bg-gray-200 p-2 rounded shadow-sm border placeholder:text-[14px] border-gray-200 focus:outline-none"
                            placeholder="Cari Data Tagihan">
                            <button type="submit" class="bg-green-400 hover:bg-green-600 text-white p-3 text-[12px] md:text-[14px] rounded-lg">Search</button>
                        </form>
                    </div>
                </div>

        <div class="relative overflow-y-scroll">
            <table class="w-full height-[700px] mt-[10px]">
                @if(count($tagihans) > 0)
                <thead class="bg-gray-600 border-b-2 border-gray-200">
                    <tr class="text-white">
                        <th class="p-3 text-md lg:text-lg border border-gray-400 font-semibold tracking-wide text-center">No.</th>
                        <th class="p-3 text-md lg:text-lg border border-gray-400 font-semibold tracking-wide text-center">Nama</th>
                        <th class="p-3 text-md lg:text-lg border border-gray-400 font-semibold tracking-wide text-center">Kode</th>
                        <th class="p-3 text-md lg:text-lg border border-gray-400 font-semibold tracking-wide text-center">Kamar</th>
                        <th class="p-3 text-md lg:text-lg border border-gray-400 font-semibold tracking-wide text-center">Tagihan</th>
                        <th class="p-3 text-md lg:text-lg border border-gray-400 font-semibold tracking-wide text-center px-12 md:px-12">Status</th>
                        <th class="p-3 text-md lg:text-lg border border-gray-400 font-semibold tracking-wide text-center">Deadline</th>
                        <th class="p-3 text-md lg:text-lg border border-gray-400 font-semibold tracking-wide text-center">Aksi</th>
                    </tr>
                </thead>
                @endif

                <tbody>
                    @forelse ($tagihans as $tagihan)
                    <tr class="bg-gray-200 border-b border-gray-400">
                        <td class="p-3 border-x border-gray-400 text-sm lg:text-md text-gray-700">
                            {{ $loop->index + 1 }}
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
                        <td class="p-3 border-r border-gray-400 text-sm lg:text-md text-center text-gray-700">
                            <span class="bg-red-500 text-white text-[10px] md:text-[10px] lg:text-[14px] p-2 px-5 rounded-2xl">{{ $tagihan->status ? '' : 'Belum Lunas'}}</span>
                        </td>
                        <td class="p-3 border-r border-gray-400 text-sm lg:text-md text-gray-700">
                            {{ $tagihan->deadline }}
                        </td>
                        <td class="flex border-r border-gray-400 flex-row p-5 text-sm lg:text-md text-gray-700">
                            <a href="/pelunasan/{{ $tagihan->id }}" class="bg-blue-500 text-white lg:px-2 px-1 py-1 lg:py-1 rounded-lg hover:bg-blue-600 focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-6 w-5 h-5 lg:h-6"><path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" /></svg></a>
                            <a href="https://wa.me/{{ $tagihan->penghuni->hp }}" target="blank" class="bg-green-500 text-white lg:px-2 px-1 py-1 lg:py-1 rounded-lg hover:bg-green-600 focus:outline-none ml-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-6 w-5 h-5 lg:h-6"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" /></svg></a>
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