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
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px] '>Data Penghuni</h1>

                <div class="flex flex-row gap-4 mt-[30px] mb-4">
                    <div class="flex">
                        <a href="/kamar/create"
                            class="w-[80px] text-center bg-[#22C55E] text-[12px] md:text-[14px] hover:bg-green-600 text-white p-3 rounded shadow-sm focus:outline-none ">Tambah
                        </a>
                    </div>
                    <div class="">
                        <form action="" method="GET">
                            <input type="text" name="search"
                            class="bg-gray-200 w-full p-2 rounded shadow-sm border border-gray-200 focus:outline-none"
                            placeholder="Cari Nama Penghuni">
                        </form>
                    </div>
                </div>

        <table class="w-full mt-[10px]">
            <thead class="bg-gray-600 border-b-2 border-gray-200">
                <tr class="text-white">
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">No.</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Nama</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Alamat</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Nomer HP</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Kamar</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">KTP</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr class="bg-gray-200">
                    <td class="p-3 text-md text-gray-700">
                        1.
                    </td>
                    <td class="p-3 text-md text-gray-700">
                        K001
                    </td>
                    <td class="p-3 text-md text-gray-700">
                        1
                    </td>
                    <td class="p-3 text-md text-gray-700">
                        Kasur, Lemari
                    </td>
                    <td class="p-3 text-md text-gray-700">
                        Rp 300.000
                    </td>
                    <td class="p-3 text-md text-gray-700">
                        <a href='' class="bg-teal-500 text-white lg:px-2 px-1 py-1 rounded-lg">KTP</a>
                    </td>
                    <td class="flex flex-row p-3 text-md text-gray-700">
                        <a href="/kamar/edit" class="bg-blue-500 text-white lg:px-2 px-1 py-1 lg:py-1 rounded-lg hover:border-indigo-700 focus:outline-none mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-6 w-5 h-5 lg:h-6"><path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" /><path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" /></svg></a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white lg:px-2 px-1 py-1 lg:py-1 rounded-lg hover:border-red-700 focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-6 w-5 h-5 lg:h-6">
                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" /></svg></button>
                        </form>
                        <a href="/kamar/edit" class="bg-yellow-500 text-white lg:px-2 px-1 py-1 lg:py-1 rounded-lg hover:border-indigo-700 focus:outline-none ml-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="lg:w-6 w-5 h-5 lg:h-6"><path d="M12 15a3 3 0 100-6 3 3 0 000 6z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" /></svg></a>
                    </td>
                </tr>

                    <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                        Data Belum Tersedia!
                    </div>

            </tbody>
        </table>
    </div>
    @include('layout.sidebar')
    @include('sweetalert::alert')
</body>
</html>