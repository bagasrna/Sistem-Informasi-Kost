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
    <div class="md:ml-[150px] mx-[80px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Update Kamar</h1>

        <div class='border-2 rounded-xl mt-[30px] shadow-lg border-gray-500'>
            <form action="/kamar/update" method="POST" class="ml-[30px]">
                @csrf
                @method('PUT')

                <div class="mt-[30px] flex flex-col">
                    <label for="kode" class="font-semibold mb-2">Kode Kamar :</label>
                    <input 
                        type="text" 
                        name="kode"
                        required
                        value="{{ $kamar->kode }}"
                        id="kode"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : K001"
                        >
                </div>

                <input type="hidden" name="id" value="{{ $kamar->id }}">
                <div class="mt-[30px] flex flex-col">
                    <label for="lantai" class="font-semibold mb-2">Lantai :</label>
                    <select type="text" required id="lantai" name="lantai" class="w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="1" name="lantai" {{ $kamar->lantai == 1 ? 'selected' : '' }}>Lantai 1</option>
                        <option value="2" name="lantai" {{ $kamar->lantai == 2 ? 'selected' : '' }}>Lantai 2</option>
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="lantai" class="font-semibold mb-2">Fasilitas :</label>
                    <input 
                        type="text" 
                        name="fasilitas"
                        value="{{ $kamar->fasilitas }}"
                        required
                        id="fasilitas"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : Lemari dan Kasur"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="kapasitas" class="font-semibold mb-2">Kapasitas :</label>
                    <select type="text" required id="kapasitas" name="kapasitas" class="w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="1" name="kapasitas" {{ $kamar->kapasitas == 1 ? 'selected' : '' }}>1 Orang</option>
                        <option value="2" name="kapasitas" {{ $kamar->kapasitas == 2 ? 'selected' : '' }}>2 Orang</option>
                    </select>
                </div>



                <div class="mt-[30px] flex flex-col">
                    <label for="tarif" class="font-semibold mb-2">Tarif :</label>
                    <input 
                        type="number" 
                        name="tarif"
                        value="{{ $kamar->tarif }}"
                        required
                        id="tarif"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : 300000"
                        >
                </div>

                <button type="submit" class="my-[30px] font-semibold text-white shadow-xl bg-[#22C55E] hover:bg-[#229a4e] p-2 rounded-xl">SUBMIT</button>
            </form>
        </div>
        <div class="mt-[60px] flex justify-end">
            <a href="/kamar" class="p-2 px-5 text-white rounded-lg bg-blue-500 hover:bg-blue-600">Back</a>
        </div>
    </div>
    @include('layout.sidebar')
    @include('sweetalert::alert')
</body>
</html>