<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white overflow-hidden">
    <aside class="fixed left-0 top-0 z-10 w-[80px] h-screen border-r border-white hover:w-60 bg-gray-700 hover:shadow-2xl">
        <div class="flex flex-col justify-between">
            <div>
                <div class="h-16 flex items-center">
                    <a href="/dashboard" class="w-max block px-4">
                        <x-iconpark-system class="w-10 text-white h-10" />
                    </a>
                </div>
                <div class="mt-6">
                    <ul class="px-1 space-y-4 ml-[20px] font-medium tracking-wide">
                        <li class="w-max space-y-4 -ml-[10px] font-medium hover:w-full">
                            <a href="" class="block w-[52px] rounded-full py-3 bg-sky-500">
                                <div class="w-max flex gap-4 items-center px-4">
                                    <x-grommet-dashboard class='w-7 text-white h-7 -ml-[4px]' />
                                    <span class='text-white ml-[10px]'>Dashboard</span>
                                </div>
                            </a>
                        </li>

                        <li class="w-max">
                            <a href="">
                                <div class="flex items-center gap-4 py-3">
                                    <x-fas-house class='w-6 text-white h-6 -pl-[30px]'/>
                                    <span class='text-white ml-[15px]'>Data Penghuni</span>
                                </div>
                            </a>
                        </li>

                        <li class="w-max">
                            <a href="">
                                <div class="flex items-center gap-4 py-3">
                                    <x-bi-people-fill class='w-6 text-white h-6 -pl-[30px]'/>
                                    <span class='text-white ml-[15px]'>Data Tagihan</span>
                                </div>
                            </a>
                        </li>

                        <li class="w-max">
                            <a href="">
                                <div class="flex items-center gap-4 py-3">
                                    <x-fas-money-bill-1-wave class='w-6 text-white h-6 -pl-[30px]'/>
                                    <span class='text-white ml-[15px]'>Pembayaran Lunas</span>
                                </div>
                            </a>
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