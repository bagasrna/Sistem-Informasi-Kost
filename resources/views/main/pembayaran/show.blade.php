<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi Pembayaran Kos</title>
    @vite('resources/css/app.css')
</head>
<body onload="print()">
    <div class="font-Poppins mt-[50px] mx-[100px]">
        <h1 class="flex justify-center text-[36px] font-medium">KWITANSI PEMBAYARAN KOS</h1>
        <hr class="mt-3">
        <div class="mt-[50px] flex justify-center">
            <h1 class="text-[14px]">Pembayaran untuk tanggal <span class="font-bold">12-0-22</span> sampai tanggal <span class="font-bold">12-02-2022</span></h1>
        </div>
        <hr class="mt-1">

        <div class="mx-[30px]">
            <table class="border w-full mt-5 text-[15px] font-medium border-gray-400" cellpadding="4" cellspacing="0">  
                <tr>  
                    <td rowspan="6" class="w-[100px] border-r border-gray-400"></td>  
                    <td class="w-[250px] mt-[20px]" valign="top"> Kode Penghuni </td>
                    <td> : <span class="ml-[20px] font-semibold">P001</span></td> 
                </tr>  
                <tr>  
                    <td valign="top" > Kode Kamar </td>  
                    <td valign="top" > : <span class="ml-[20px] font-semibold">K001</span></td>  
                </tr>    
                <tr>  
                    <td valign="top" > Nama </td>  
                    <td valign="top" > : <span class="ml-[20px] font-semibold">Yanto Supriyanto</span></td>  
                </tr>
                <tr>  
                    <td valign="top" > Untuk Pembayaran </td>  
                    <td valign="top" > : <span class="ml-[20px] font-semibold">3 Bulan</span></td>  
                </tr>  
                <tr>  
                    <td valign="bottom" class="h-[70px]"><p class="font-bold text-[15px]">Rp. 200.000 </p></td>
                    <td valign="top" class="h-[120px] justify-end flex mr-[30px] font-bold"> Tanda Tangan </td>
                </tr>  
            </table>  
        </div>
        </div>
    </body>
    </html>