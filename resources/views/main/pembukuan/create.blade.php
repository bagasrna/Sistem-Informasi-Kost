<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kost</title>
</head>
<body>
    <div class="md:ml-[150px] mx-[80px] h-screen z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px]'>Menambahkan Transaksi Pembukuan</h1>

        <div class='border-2 rounded-xl mt-[30px] shadow-lg border-gray-500'>
            <form action="/pembukuan/create" method="POST" class="ml-[30px]">
                @csrf

                <div class="mt-[30px] flex flex-col">
                    <label for="transaksi" class="font-semibold mb-2">Pilihan Transaksi :</label>
                    <select type="text" required id="transaksi" name="tipe" class="w-[200px] pl-3 focus:border-blue-400 text-[14px] border-2 rounded-lg py-3 border-gray-500 outline-none ">
                        <option value="" name="tipe">Pilih Transaksi</option>
                        <option value="0" name="tipe">Debit</option>
                        <option value="1" name="tipe">Kredit</option>
                    </select>
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="tgl_transaksi" class="font-semibold mb-2">Masukkan Tanggal Transaksi :</label>
                    <input 
                        type="date" 
                        name="tgl_transaksi"
                        required
                        id="tgl_transaksi"
                        class="border-2 rounded-lg w-1/4 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="nominal" class="font-semibold mb-2">Masukkan Nominal Uang :</label>
                    <input 
                        type="number" 
                        name="nominal"
                        required
                        id="nominal"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : 300000"
                        >
                </div>

                <div class="mt-[30px] flex flex-col">
                    <label for="lantai" class="font-semibold mb-2">Masukkan Keterangan :</label>
                    <input 
                        type="text" 
                        name="keterangan"
                        required
                        id="keterangan"
                        class="border-2 rounded-lg w-4/5 border-gray-500 pl-3 outline-none focus:border-blue-400 p-2 text-[14px]"
                        placeholder="Contoh : Pengeluaran membayar listrik"
                        >
                </div>

                <button type="submit" class="my-[30px] font-semibold text-white shadow-xl bg-[#22C55E] hover:bg-[#229a4e] p-2 px-10 rounded-xl">SUBMIT</button>

            </form>
        </div>
    </div>
    @include('layout.sidebar')
</body>
</html>