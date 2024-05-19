{{-- form search --}}
<form class="container-page min-w-full flex items-center justify-center space-x-2">
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

<div class="container-page my-4 flex items-center justify-start space-x-2 cursor-pointer">
    <div class="text-green-500 font-bold text-xl">+</div>
    <div class="text-white font-semibold text-sm">Detail Pencarian</div>
</div>
<div class="container-page min-w-full mb-20">
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