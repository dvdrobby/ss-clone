<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <title>Direktori Sekolah Sunnah se-Indonesia</title>

        <!-- Styles -->
        
    </head>
    <body class="antialiased dark:bg-black dark:text-white/50 min-w-full">
        <section class="pb-20">
            <div class="bg-gray-600 py-2">
                <div class="container text-xs text-white font-semibold">Direktori Sekolah Sunnah se-Indonesia</div>
            </div>
            <div class="py-6 h-auto min-w-full flex items-center justify-between container">
                <div class="w-[400px]">
                    <img src="https://sekolahsunnah.com/FrontEnd/assets/img/logo-ss-c.png" >
                </div>
                <div class="text-white flex items-center justify-end ml-auto space-x-8 font-semibold">
                    <a href="">Home</a>
                    <a href="">Kontak Kami</a>
                    <a href="">Donasi</a>
                    <button class="rounded-full bg-green-500 text-xs font-bold px-4 py-2">SUBMIT DATA SEKOLAH</button>
                </div>
            </div>
            <div class="border-b-[0.5px] mx-[120px]"></div>

            {{-- tagline --}}
            <div class="px-[220px] text-center my-10 text-white font-semibold text-4xl">Cari Sekolah Impian Bermanhaj Salaf Yang Sesuai Untuk Buah Hati Anda Hanya Di SekolahSunnah.com</div>

            {{-- form search --}}
            <form class="container min-w-full flex items-center justify-center space-x-2">
                <div class="text-white space-y-2 w-[400px]">
                    <label for="sekolah" class="text-lg">Cari Sekolah Apa?</label>
                    <input id="sekolah" name="sekolah" class="fe-input w-full text-slate-800" placeholder="Masukkan nama sekolah...">
                </div>
                <div class="text-white space-y-2 flex-1">
                    <label for="lokasi" class="text-lg">Dimana?</label>
                    <input id="lokasi" name="lokasi" class="fe-input w-full text-slate-800" placeholder="Ketik Nama Kota">
                </div>
                <div class="text-white space-y-2">
                    <p class="text-lg opacity-0">Dimana?</p>
                    <button class="text-white fe-input w-[200px] grow-0 bg-green-500">Tampilkan Pencarian</button>
                </div>
                
            </form>

            <div class="container my-4 flex items-center justify-start space-x-2 cursor-pointer">
                <div class="text-green-500 font-bold text-xl">+</div>
                <div class="text-white font-semibold text-sm">Detail Pencarian</div>
            </div>
            <div class="container min-w-full mb-20">
                <div class="bg-white rounded-md px-8 py-10 min-w-full flex
                items-center justify-start space-x-2 flex-wrap">
                    <div class="flex space-x-4 w-[200px]">
                        <input type="checkbox" class="checked:bg-green-500" id="akhwat" name="akhwat">
                        <label for="akhwat">Akhwat</label>
                    </div>
                    <div class="flex space-x-4 w-[200px]">
                        <input type="checkbox" class="checked:bg-green-500" id="ikhwan" name="ikhwan">
                        <label for="ikhwan">Ikhwan</label>
                    </div>
                    <div class="flex space-x-4 w-[100px]">
                        <input type="checkbox" class="checked:bg-green-500" id="boarding" name="boarding">
                        <label for="boarding">Boarding</label>
                    </div>
                    <input class="w-200px p-4 border-2 outline-none" type="text" placeholder="SPP minimal               Rp">
                    <input class="w-200px p-4 border-2 outline-none" type="text" placeholder="SPP maksimal               Rp">

                </div>
            </div>
            <div class="bg-hero min-w-full h-[700px] absolute top-0 left-0 -z-20">
            </div>
        </section>
        <section>Jenjang Sekolah</section>
        <section>Sekolah Pilihan</section>
        <section>Sekolah Terbaru</section>
        <section>Footer</section>
    </body>
</html>
