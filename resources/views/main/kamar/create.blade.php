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
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Menambahkan Kamar</h1>

        <div class='border-2 lg:w-1/2 rounded-lg mt-[30px] shadow-lg border-gray-500'>
            <form action="" class="ml-[30px]">
                <div class="mt-[30px] flex flex-col">
                    <label for="lantai" class="font-semibold mb-2">Pilih Lantai :</label>
                    <select type="text" required id="lantai" name="lantai" class="w-[100px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="1" name="lantai">Lantai 1</option>
                        <option value="2" name="lantai">Lantai 2</option>
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="lantai" class="font-semibold mb-2">Masukkan Fasilitas :</label>
                    <input 
                        type="text" 
                        name="fasilitas"
                        required
                        id="fasilitas"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : Lemari dan Kasur"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="lantai" class="font-semibold mb-2">Masukkan Kapasitas :</label>
                    <input 
                        type="text" 
                        name="fasilitas"
                        required
                        id="fasilitas"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : Lemari dan Kasur"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="lantai" class="font-semibold mb-2">Masukkan Tarif :</label>
                    <input 
                        type="number" 
                        name="fasilitas"
                        required
                        id="fasilitas"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : 300000"
                        >
                </div>

                <button class="my-[30px] font-semibold text-white shadow-xl transition hover:-translate-y-3 bg-[#22C55E] p-2 rounded-xl">SUBMIT</button>
            </form>
        </div>
    </div>
    @include('layout.sidebar')
</body>
</html>