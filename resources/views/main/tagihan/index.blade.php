<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kost</title>
</head>
<body>
    <div class="md:md:ml-[150px] mx-[80px] flex flex-col z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px] '>Data Tagihan</h1>
        <div class="container mt-10 mb-10">
            <div>
                <div class="grid grid-cols-8 gap-4 mb-4">
                    <div class="flex">
                        <a href=""
                            class="md:w-[200px] text-center w-[300px] bg-[#22C55E] text-[12px] md:text-[14px] hover:bg-green-600 text-white p-3 rounded shadow-sm focus:outline-none ">Tambah
                        </a>
                    </div>
                    <div class="col-span-7">
                        <form action="" method="GET">
                            <input type="text" name="search"
                            class="lg:w-full lg:ml-0 w-[440px] bg-gray-200 p-2 rounded shadow-sm border border-gray-200 focus:outline-none focus:bg-white"
                            placeholder="Search your author">
                        </form>
                    </div>
                </div>

                <table class="w-full flex flex-col table-auto">
                    <thead class="w-full">
                        <tr class="bg-[#333F51] flex justify-evenly w-full">
                            <th class="px-10 py-2 text-center">
                                <span class="text-white">Nama</span>
                            </th>
                            <th class="px-10 py-2 text-center">
                                <span class="text-white">Alamat</span>
                            </th>
                            <th class="px-10 py-2 text-center">
                                <span class="text-white">Tanggal Lahir</span>
                            </th>
                            <th class="px-10 py-2 text-center">
                                <span class="text-white">Aksi</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="w-full">

                            <tr class="bg-gray-200  flex justify-evenly w-full ">
                                <td class="px-10 py-2 text-center">
                                    <span>Nama</span>
                                </td>
                                <td class="px-10 py-2 text-center">
                                    <span>Alamat</span>
                                </td>
                                <td class="px-10 py-2 text-center">
                                    <span>12-9-2022</span>
                                </td>
                                <td class="px-10 py-2 flex-row flex text-center">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:border-indigo-700 text-xs focus:outline-none mr-2"><a href="">EDIT</a></button>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 ml-3 -mr-[60px] py-2 rounded-lg hover:border-red-700 text-xs focus:outline-none">DELETE</button>
                                    </form>
                                </td> 
                            </tr>

                            <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                                Data Belum Tersedia!
                            </div>

                    </tbody>
                </table>
                <div class="mt-2">

                    links
                </div>
            </div>
        </div>
    </div>
    @include('layout.sidebar')
    @include('sweetalert::alert')
</body>
</html>