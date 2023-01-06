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

        <table class="w-full mt-[30px]">
            <thead class="bg-gray-600 border-b-2 border-gray-200">
                <tr class="text-white">
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">No.</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Nama</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">KTP</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Alamat</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Durasi Kos</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Status</th>
                    <th class="p-3 text-lg font-semibold tracking-wide text-left">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr class="bg-gray-200">
                    <td class="p-3 text-md text-blue-500">1.</td>
                    <td class="p-3 text-md text-gray-700">Nama</td>
                    <td class="p-3 text-md text-gray-700">KTP</td>
                    <td class="p-3 text-md text-gray-700">Alamat</td>
                    <td class="p-3 text-md text-gray-700">Durasi Kos</td>
                    <td class="p-3 text-md text-gray-700">
                        <span class="">Status</span>
                    </td>
                    <td class="flex -ml-[30px] flex-row p-3 text-md text-gray-700">
                        <a href="" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:border-indigo-700 focus:outline-none mr-2">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:border-red-700 focus:outline-none">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('layout.sidebar')
</body>
</html>