<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.ibb.co/vHqs58z/icons8-home-page-100.png">
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
    <div class="md:ml-[150px] ml-[80px] mr-[30px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[20px] lg:text-[30px] mt-[30px] md:mt-[90px] '>Data Kamar</h1>

                <div class="flex flex-col gap-4 mt-[30px] mb-4">
                    <div>
                        <a href="/kamar/create"
                            class="text-center bg-[#22C55E] text-[12px] md:text-[14px] hover:bg-green-600 text-white p-3 rounded shadow-sm focus:outline-none ">Tambah
                        </a>
                    </div>
                    <div>
                        <form action="/kamar" method="GET" class="flex flex-col mt-2 vsm:flex-row gap-4">
                            <input type="text" name="search" value="{{ old('search')}}"
                            class="bg-gray-200 p-2 rounded shadow-sm w-[200px] border placeholder:text-[12px] sm:placeholder:text-[14px] border-gray-200 focus:outline-none"
                            placeholder="Cari Kamar">
                            <button type="submit" class="bg-blue-400 w-[80px] hover:bg-blue-600 text-white p-3 text-[12px] sm:text-[14px] rounded-lg">Search</button>
                        </form>
                    </div>
                </div>

        <div class="relative overflow-y-scroll w-full md:overflow-hidden">
            <table class="w-full mt-[10px]">
                @if(count($kamars) > 0)
                <thead class="bg-gray-600">
                    <tr class="text-white">
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">No.</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">ID</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Lantai</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Fasilitas</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Kapasitas</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Tarif</th>
                        <th class="p-3 text-md md:text-lg border border-gray-400 font-semibold tracking-wide text-center">Aksi</th>
                    </tr>
                </thead>
                @endif

                <tbody >
                    @forelse ($kamars as $kamar)
                    @php $class = $loop->index + 1 / 2 === 0 ? 'even' : 'odd'; @endphp
                    <tr class="bg-gray-200 border-b border-gray-400">
                        <td class="p-3 border-x text-sm lg:text-md text-gray-700 border-gray-400">
                            {{ $loop->index + 1 }}.
                        </td>
                        <td class="p-3 border-r text-sm lg:text-md text-gray-700 border-gray-400">
                            {{ $kamar->kode }}
                        </td>
                        <td class="p-3 border-r text-sm lg:text-md text-gray-700 border-gray-400">
                            Lantai {{ $kamar->lantai }}
                        </td>
                        <td class="p-3 border-r text-sm lg:text-md text-gray-700 border-gray-400">
                            {{ $kamar->fasilitas }}
                        </td>
                        <td class="p-3 border-r text-sm lg:text-md text-gray-700 border-gray-400">
                            {{ $kamar->kapasitas }} Orang
                        </td>
                        <td class="p-3 text-sm lg:text-md text-gray-700">
                            @currency($kamar->tarif)
                        </td>
                        <td class="flex border-x border-gray-400 flex-row lg:p-5 p-8 xl:p-3 text-sm lg:text-md text-gray-700">
                            <a href="/kamar/update/{{ $kamar->id }}" class="bg-blue-500 text-white lg:px-2 px-1 py-1 lg:py-1 rounded-lg hover:bg-indigo-600 focus:outline-none mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-6 w-5 h-5 lg:h-6"><path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" /><path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" /></svg></a>
                            <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Kamar Ini?');" action="/kamar/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $kamar->id }}">
                                <button type="submit" class="bg-red-500 text-white lg:px-2 px-1 py-1 lg:py-1 rounded-lg hover:bg-red-600 focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-6 w-5 h-5 lg:h-6">
                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" /></svg></button>
                            </form>
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
        <div class="mt-2 pb-[50px]">
            {{ $kamars->links('vendor.pagination.tailwind') }}
        </div>
    </div>
    @include('layout.sidebar')
    @include('sweetalert::alert')
</body>
</html>