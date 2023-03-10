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
    <div class="md:ml-[150px] sm:mx-[80px] ml-[80px] mr-[30px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Menambahkan Kamar</h1>

        <div class='border-2 rounded-xl mt-[30px] shadow-lg border-gray-500'>
            <form action="/kamar/create" method="POST" class="ml-[30px]">
                @csrf

                <div class="mt-[30px] flex flex-col">
                    <label for="kode" class="font-semibold mb-2">Kode Kamar :</label>
                    <input 
                        type="text" 
                        name="kode"
                        required
                        value="{{ old('kode')}}"
                        id="kode"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : K001"
                        >
                    @error('kode')
                        <div class="invalid-feedback text-red-600 text-[14px] mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="lantai" class="font-semibold mb-2">Lantai :</label>
                    <select type="text" required id="lantai" name="lantai" class="w-4/5 sm:w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value=""  name="lantai">Pilih Lantai</option>
                        <option value="1" {{ old('lantai') == "1" ? 'selected' : '' }} name="lantai">Lantai 1</option>
                        <option value="2" {{ old('lantai') == "2" ? 'selected' : '' }} name="lantai">Lantai 2</option>
                        <option value="3" {{ old('lantai') == "3" ? 'selected' : '' }} name="lantai">Lantai 3</option>
                        <option value="4" {{ old('lantai') == "4" ? 'selected' : '' }} name="lantai">Lantai 4</option>
                        <option value="5" {{ old('lantai') == "5" ? 'selected' : '' }} name="lantai">Lantai 5</option>
                    </select>
                    @error('lantai')
                        <div class="invalid-feedback">{{ $errors->first('lantai') }}</div>
                    @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="lantai" class="font-semibold mb-2">Masukkan Fasilitas :</label>
                    <input 
                        type="text" 
                        name="fasilitas"
                        required
                        value="{{ old('kapasitas')}}"
                        id="fasilitas"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : Lemari dan Kasur"
                        >
                        @error('fasilitas')
                        <div class="invalid-feedback text-red-600 text-[14px] mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="kapasitas" class="font-semibold mb-2">Kapasitas :</label>
                    <select type="text" required id="kapasitas" name="kapasitas" class="w-4/5 sm:w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="kapasitas">Pilih Kapasitas</option>
                        <option value="1" {{ old('kapasitas') == "1" ? 'selected' : '' }} name="kapasitas">1 Orang</option>
                        <option value="2" {{ old('kapasitas') == "2" ? 'selected' : '' }} name="kapasitas">2 Orang</option>
                    </select>
                    @error('kapasitas')
                    <div class="invalid-feedback">{{ $errors->first('kapasitas') }}</div>
                    @enderror
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="tarif" class="font-semibold mb-2">Masukkan Tarif :</label>
                    <input 
                        type="number" 
                        name="tarif"
                        required
                        value="{{ old('tarif')}}"
                        id="tarif"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : 300000"
                        >
                        @error('fasilitas')
                        <div class="invalid-feedback text-red-600 text-[14px] mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                </div>

                <button type="submit" class="my-[30px] font-semibold text-white shadow-xl bg-[#22C55E] hover:bg-[#229a4e] p-2 px-10 rounded-xl">SUBMIT</button>
            </form>
        </div>
        <div class="flex justify-end py-[50px]">
            <a href="/kamar" class="p-2 px-5 text-white rounded-lg bg-blue-500 hover:bg-blue-600">Back</a>
        </div>
    </div>
    @include('layout.sidebar')
    @include('sweetalert::alert')
</body>
</html>