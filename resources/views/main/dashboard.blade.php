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
    <div class="md:ml-[150px] mx-[80px]  flex flex-col z-40 font-Poppins">
        <h1 class='font-bold text-[30px] mt-[30px] md:mt-[90px] '>Dashboard</h1>
        <div class="flex flex-row justify-between flex-wrap mt-[20px]">

            <div class="flex mb-[100px] transition shadow-xl hover:shadow-2xl hover:-translate-y-3 text-white">
                <a href="">
                    <div class="md:w-[300px] mb-[50px] w-[250px] bg-blue-500 rounded-xl">
                        <div class=" p-5">
                            <p class="text-[24px] md:text-[30px]">6</p>
                            <h1 class="font-bold text-[16px] md:text-[20px]">Jumlah Kamar</h1>
                        </div>
                        <div class="md:mt-[50px] mt-[20px] text-center rounded-b-xl p-2 bg-blue-800 w-full">
                            <h1 class='text-bold'>Click For More Info!</h1>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-[80px] md:ml-[190px] text-gray-200 w-[50px] ml-[170px] -mt-[170px] md:-mt-[200px]"><path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" /><path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" /></svg>
                </a>
            </div>

            <div class="flex transition shadow-xl hover:shadow-2xl hover:-translate-y-3 mb-[100px] text-white">
                <a href="" >
                    <div class="md:w-[300px] mb-[50px] w-[250px] bg-yellow-500 rounded-xl">
                        <div class="p-5">
                            <p class="text-[24px] md:text-[30px]">3</p>
                            <h1 class="font-bold text-[16px] md:text-[20px]">Akun Penghuni</h1>
                        </div>
                        <div class="md:mt-[50px] mt-[20px] text-center rounded-b-xl p-2 bg-yellow-800 w-full">
                            <h1 class='text-bold'>Click For More Info!</h1>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-[80px] md:ml-[190px] text-gray-200 w-[50px] ml-[170px] -mt-[170px] md:-mt-[200px]"><path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" /></svg>
                </a>
            </div>

            <div class="flex  mb-[100px] transition shadow-xl hover:shadow-2xl hover:-translate-y-3 text-white">
                <a href="">
                    <div class="md:w-[300px] mb-[50px] w-[250px] bg-red-500 rounded-xl">
                        <div class=" p-5">
                            <p class="text-[24px] md:text-[30px]">5</p>
                            <h1 class="font-bold text-[16px] md:text-[20px]">Belum Bayar</h1>
                        </div>
                        <div class="md:mt-[50px] mt-[20px] text-center rounded-b-xl p-2 bg-red-800 w-full">
                            <h1 class='text-bold'>Click For More Info!</h1>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-[80px] md:ml-[190px] text-gray-200 w-[50px] ml-[170px] -mt-[170px] md:-mt-[200px]"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm-4.34 7.964a.75.75 0 01-1.061-1.06 5.236 5.236 0 013.73-1.538 5.236 5.236 0 013.695 1.538.75.75 0 11-1.061 1.06 3.736 3.736 0 00-2.639-1.098 3.736 3.736 0 00-2.664 1.098z" clip-rule="evenodd" /></svg>
                </a>
            </div>

            <div class="flex mb-[50px] transition shadow-xl hover:shadow-2xl hover:-translate-y-3 text-white">
                <a href="">
                    <div class="md:w-[300px] mb-[50px] w-[250px] bg-green-500 rounded-xl">
                        <div class=" p-5">
                            <p class="text-[24px] md:text-[30px]">6</p>
                            <h1 class="font-bold text-[16px] md:text-[20px]">Lunas</h1>
                        </div>
                        <div class="md:mt-[50px] mt-[20px] text-center rounded-b-xl p-2 bg-green-800 w-full">
                            <h1 class='text-bold'>Click For More Info!</h1>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-[80px] md:ml-[190px] text-gray-200 w-[50px] ml-[170px] -mt-[170px] md:-mt-[200px]"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z" clip-rule="evenodd" /></svg>
                </a>
            </div>
        </div>
    </div>
    @include('layout.sidebar')
</body>
</html>