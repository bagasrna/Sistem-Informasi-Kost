<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kos</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form action="/login" method="post">
    @include('sweetalert::alert')
        @csrf
            <div class='border-2 p-5 sm:p-10 rounded-2xl shadow-lg font-Poppins border-[#257B57] w-[300px] sm:w-[500px] my-[100px] flex-col flex items-center h-full mx-auto'>
                <div class='my-5'>
                    <h1 class='justify-center flex mb-[50px]font-Poppins text-[14px] sm:text-[20px] font-bold'>Sistem Informasi Kost</h1>
                    <div class=' flex flex-col'>
                        <div class='ml-[20px] sm:ml-0'>
                            <h1 class='font-bold text-[13px] mt-[50px] sm:text-[16px]'>Username</h1>
                            <div class='mb-3 relative'>
                                <label class='absolute  inset-y-0 left-0 flex items-center pl-3 pointer-events-none'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  class='fill-[#B0B1B0] w-4 h-4 '><path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" /></svg>

                                </label>
                                <input 
                                    type="text" 
                                    name="username" 
                                    placeholder='Masukkan Username. . . .'
                                    required 
                                    class='border rounded-xl pl-8 p-3 text-[14px] focus:ring-2 focus:ring-blue-500 placeholder:text-[13px] w-[250px] sm:w-[300px] outline-none border-[#A7ABB8] my-5'>
                            </div>
                        </div>
                        <div class='ml-[20px] sm:ml-0'>
                            <h1 class='font-bold text-[13px] sm:text-[16px]'>Password</h1>
                            <div class='mb-6 relative mt-[15px]'>
                                <label class='absolute  inset-y-0 left-0 flex items-center pl-3 pointer-events-none'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  class='fill-[#B0B1B0] w-4 h-4 '><path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" /></svg>
                                </label>
                                <input 
                                type="password" 
                                name="password" 
                                placeholder='Masukkan Password. . . .'
                                required 
                                class='border rounded-xl pl-8 p-3 text-[14px] placeholder:text-[13px] w-[250px] sm:w-[300px] focus:ring-2 focus:ring-blue-500 outline-none border-[#A7ABB8]'>
                        </div>

                        <button type='submit' class='bg-[#4172dc] mt-[10px] p-3 hover:bg-[#3159b1] transition hover:-translate-y-3 justify-center w-full rounded-2xl text-white shadow-[#536998] shadow-2xl'>Login</button>
                    </div>
                </div>
            </div>
        </form>
</body>
</html>