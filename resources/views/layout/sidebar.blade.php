<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kos</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white overflow-x-hidden font-Poppins">
    <aside class="fixed overflow-hidden left-0 top-0 z-10 h-screen w-12 md:w-20 hover:w-48  md:hover:w-[265px] bg-gray-700 hover:shadow-2xl">
        <div class="flex flex-col justify-between">
            <div>
                <div class="h-16 flex items-center bg-gray-500">
                    <a href="/dashboard">
                        <div class="w-max flex gap-4 items-center px-2 md:px-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  class="md:w-10 w-8 h-8  text-white md:h-10" ><path fill-rule="evenodd" d="M11.622 1.602a.75.75 0 01.756 0l2.25 1.313a.75.75 0 01-.756 1.295L12 3.118 10.128 4.21a.75.75 0 11-.756-1.295l2.25-1.313zM5.898 5.81a.75.75 0 01-.27 1.025l-1.14.665 1.14.665a.75.75 0 11-.756 1.295L3.75 8.806v.944a.75.75 0 01-1.5 0V7.5a.75.75 0 01.372-.648l2.25-1.312a.75.75 0 011.026.27zm12.204 0a.75.75 0 011.026-.27l2.25 1.312a.75.75 0 01.372.648v2.25a.75.75 0 01-1.5 0v-.944l-1.122.654a.75.75 0 11-.756-1.295l1.14-.665-1.14-.665a.75.75 0 01-.27-1.025zm-9 5.25a.75.75 0 011.026-.27L12 11.882l1.872-1.092a.75.75 0 11.756 1.295l-1.878 1.096V15a.75.75 0 01-1.5 0v-1.82l-1.878-1.095a.75.75 0 01-.27-1.025zM3 13.5a.75.75 0 01.75.75v1.82l1.878 1.095a.75.75 0 11-.756 1.295l-2.25-1.312a.75.75 0 01-.372-.648v-2.25A.75.75 0 013 13.5zm18 0a.75.75 0 01.75.75v2.25a.75.75 0 01-.372.648l-2.25 1.312a.75.75 0 11-.756-1.295l1.878-1.096V14.25a.75.75 0 01.75-.75zm-9 5.25a.75.75 0 01.75.75v.944l1.122-.654a.75.75 0 11.756 1.295l-2.25 1.313a.75.75 0 01-.756 0l-2.25-1.313a.75.75 0 11.756-1.295l1.122.654V19.5a.75.75 0 01.75-.75z" clip-rule="evenodd" /></svg>
                            <span class="text-white ml-[5px] text-[12px] md:text-[16px]">Sistem Informasi Kos</span>
                        </div>
                    </a>
                </div>
                <div class="mt-6">
                    <ul class="px-1 space-y-4 ml-[10px] md:ml-[20px] text-[12px] md:text-[16px] font-medium tracking-wide">
                        <li class="w-max space-y-4 -ml-[10px] font-medium hover:w-full">
                            <a href="" class="block md:w-[52px] w-[30px] ml-[5px] md:ml-0 rounded-full py-1 md:py-3 bg-sky-500">
                                <div class="w-max flex gap-4 items-center px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  class='md:w-7 w-5 h-5 md:h-7  text-white -ml-[11px] md:-ml-[4px]' ><path d="M6 3a3 3 0 00-3 3v2.25a3 3 0 003 3h2.25a3 3 0 003-3V6a3 3 0 00-3-3H6zM15.75 3a3 3 0 00-3 3v2.25a3 3 0 003 3H18a3 3 0 003-3V6a3 3 0 00-3-3h-2.25zM6 12.75a3 3 0 00-3 3V18a3 3 0 003 3h2.25a3 3 0 003-3v-2.25a3 3 0 00-3-3H6zM17.625 13.5a.75.75 0 00-1.5 0v2.625H13.5a.75.75 0 000 1.5h2.625v2.625a.75.75 0 001.5 0v-2.625h2.625a.75.75 0 000-1.5h-2.625V13.5z" /></svg>
                                    <span class='text-white ml-[10px]'>Dashboard</span>
                                </div>
                            </a>
                        </li>

                        <li class="w-max">
                            <a href="">
                                <div class="flex items-center gap-4 py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  class='md:w-6 w-4 h-4 md:h-6 text-white -pl-[30px]'><path d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" /><path fill-rule="evenodd" d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z" clip-rule="evenodd" /><path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" /></svg>
                                    <span class='text-white ml-[15px]'>Data Penghuni</span>
                                </div>
                            </a>
                        </li>

                        <li class="w-max">
                            <a href="">
                                <div class="flex items-center gap-4 py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class='md:w-6 w-4 h-4 md:h-6 text-white -pl-[30px]'><path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" /></svg>
                                    <span class='text-white ml-[15px]'>Data Tagihan</span>
                                </div>
                            </a>
                        </li>

                        <li class="w-max">
                            <a href="">
                                <div class="flex items-center gap-4 py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  class='md:w-6 w-4 h-4 md:h-6 text-white -pl-[30px]'><path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" /><path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" /><path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" /></svg>
                                    <span class='text-white ml-[15px]'>Pembayaran Lunas</span>
                                </div>
                            </a>
                        </li>

                        <li class="w-max">
                            <form action="" method="post">
                                @csrf
                                <button type="submit">
                                    <div class="flex bottom-0 pb-[20px] gap-4 py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class='md:w-6 w-4 h-4 md:h-6 text-white -pl-[30px]'><path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd" /></svg>
                                        <span class='text-white ml-[15px]'>Logout</span>
                                    </div>
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <main class="w-[100px] ml-auto">
        <div class='2xl:container mx-auto space-y-6'>
            <div class="h-16 border-b border-white">

            </div>
            <div class="px-6 lg:px-12">
                <div class="h-96 rounded-2xl border-b border-dashed border-white">
                    <span class='text-white'>Content</span>
                </div>
            </div>
        </div>
    </main>
</body>
</html>