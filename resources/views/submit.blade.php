<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:tagline>{{ $tagline }}</x-slot:tagline>

    <div class="container-page mt-10">
        <div class="py-10 px-4 box-border border-2 border-gray-300 min-w-full bg-white rounded-sm ">
            <div class="flex justify-center items-center min-w-full my-4 text-green-600">
                <div class="h-[1px] bg-green-600 flex-1"></div>
                <div class="p-1 bg-gray-100 text-center min-w-content text-2xl font-semibold">Struktural Sekolah</div>
                <div class="h-[1px] bg-green-600 flex-1"></div>
            </div>
            <div class="text-red-500 min-w-full flex justify-end mb-2">
                <p class="text-red-500 flex items-start"><span class="text-xs text-red-500">*</span>Penanda isian harus diisi</p>
            </div>
            <form>
                <div class="min-w-full grid grid-cols-2 gap-3">
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Nama Pembina Sekolah <span class="text-red-500">*</span></label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan nama pembina sekolah...">
                    </div>
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Nama Ketua Yayasan <span class="text-red-500">*</span></label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan nama ketua yayasan...">
                    </div>
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Nama Kepala Sekolah <span class="text-red-500">*</span></label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan nama kepala sekolah...">
                    </div>                    
                </div>

                {{-- Informasi Umum --}}
                <div class="flex justify-center items-center min-w-full my-10 text-green-600">
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                    <div class="p-1 bg-gray-100 text-center min-w-content text-2xl font-semibold">Informasi Umum</div>
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                </div>
                <div class="text-teal-900 min-w-full mb-2 bg-teal-100 rounded-sm">
                    <p class="p-2 text-md font-semibold"><span class="font-bold">Perhatian </span>Jika lembaga pendidikan memiliki lebih dari satu jenjang (SD, SMP, SMA, dst), mohon diisikan secara terpisah.</p>
                </div>
                <div class="min-w-full">
                    <div class="grid grid-cols-2 gap-3 min-w-full mb-2">
                        <div>
                            <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Nama Sekolah <span class="text-red-500">*</span></label>
                            <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan nama sekolah...">
                        </div>  
                        <div class="grid grid-cols-2 gap-3 min-w-full">
                            <div>
                                <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Jenjang</label>
                                <select type="select" class="fe-input min-w-full border-2 outline-none font-semibold">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                </select>
                            </div>  
                            <div>
                                <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Nama Yayasan</label>
                                <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan nama yayasan...">
                            </div>  
                        </div>  
                    </div>
                    <div class="grid grid-cols-2 gap-3 min-w-full mb-2">
                        <div>
                            <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Uang Masuk <span class="text-red-500">*</span></label>
                            <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan uang masuk...">
                        </div>   
                        <div>
                            <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Biaya Bulanan <span class="text-red-500">*</span></label>
                            <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan biaya SPP...">
                        </div>   
                    </div> 
                    <div class="min-w-full mb-2">
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Keterangan Sekolah </label>
                        <textarea name="" id="" cols="30" rows="10" class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan keterangan sekolah..."></textarea>
                    </div> 
                </div>

                {{-- Informasi Kontak --}}
                <div class="flex justify-center items-center min-w-full my-10 text-green-600">
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                    <div class="p-1 bg-gray-100 text-center min-w-content text-2xl font-semibold">Informasi Kontak</div>
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                </div>
                <div class="min-w-full grid grid-cols-3 gap-3 mb-2">
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Kabupaten/Kota <span class="text-red-500">*</span></label>
                        <select class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan nama kepala sekolah...">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div> 
                    <div class="col-span-2 ">
                        <div class="min-w-full mb-2">
                            <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Alamat <span class="text-red-500">*</span></label>
                            <textarea name="" id="" cols="30" rows="4" class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan alamat..."></textarea>
                        </div>
                    </div>
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">URL Map (Jika Ada)</label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Contoh:https://goo.gl/maps/9haAV768DSsH...">
                    </div> 
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Email</label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan email...">
                    </div> 
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Website</label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan website...">
                    </div> 
                </div>
                <div class="min-w-full grid grid-cols-3 gap-3 mb-2">
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Telpon 1 <span class="text-red-500">*</span></label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan Telpon...">
                    </div> 
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Telpon 2 </label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan Telpon...">
                    </div>   
                </div>
                <div class="min-w-full grid grid-cols-3 gap-3 mb-2">
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Contact Person <span class="text-red-500">*</span></label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan Contact Person...">
                    </div> 
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Nomor HP <span class="text-red-500">*</span></label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan Nomor HP...">
                    </div> 
                </div>

                {{-- Social Media --}}
                <div class="flex justify-center items-center min-w-full my-10 text-green-600">
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                    <div class="p-1 bg-gray-100 text-center min-w-content text-2xl font-semibold">Social Media</div>
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                </div>
                <div class="min-w-full grid grid-cols-2 gap-3 mb-2">
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Facebook</label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan url facebook...">
                    </div> 
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Instagram</label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan url instagram...">
                    </div> 
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Twitter</label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan url twitter...">
                    </div> 
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Youtube</label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan url youtube...">
                    </div> 
                </div>

                {{-- Fasilitas --}}
                <div class="flex justify-center items-center min-w-full my-10 text-green-600">
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                    <div class="p-1 bg-gray-100 text-center min-w-content text-2xl font-semibold">Fasilitas</div>
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                </div>
                <div class="min-w-full grid grid-cols-2 gap-3 mb-2">
                    <div class="flex items-center justify-start space-x-4">
                      <input type="checkbox">
                      <label class="flex items-center space-x-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m-1.5 20v-6h-3l2.59-7.59C10.34 7.59 11.1 7 12 7s1.66.59 1.91 1.41L16.5 16h-3v6z"/></svg>
                        </span>
                        <span class="font-bold">Akhwat</span>
                        <span>(Tersedia kelas Akhwat)</span> 
                      </label>   
                    </div>
                    <div class="flex items-center justify-start space-x-4">
                      <input type="checkbox">
                      <label class="flex items-center space-x-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m-1.5 5h3a2 2 0 0 1 2 2v5.5H14V22h-4v-7.5H8.5V9a2 2 0 0 1 2-2"/></svg>
                        </span>
                        <span class="font-bold">Ikhwan</span>
                        <span>(Tersedia kelas ikhwan)</span> 
                      </label>  
                    </div>
                    <div class="flex items-center justify-start space-x-4">
                      <input type="checkbox">
                      <label><span class="font-bold">Full Day</span> (Menyelenggarakan kelas FUll Day)</label>  
                    </div>
                    <div class="flex items-center justify-start space-x-4">
                      <input type="checkbox">
                      <label class="flex items-center space-x-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M17 2a2 2 0 0 1 2 2v16a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V4a2 2 0 0 1 2-2zm-4 11h-2a1 1 0 0 0-1 1v6h4v-6a1 1 0 0 0-1-1m-3-4a1 1 0 1 0 0 2a1 1 0 0 0 0-2m4 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-4-3a1 1 0 1 0 0 2a1 1 0 0 0 0-2m4 0a1 1 0 1 0 0 2a1 1 0 0 0 0-2"/></g></svg>
                        </span>
                        <span class="font-bold">Boarding</span>
                        <span>(Menyelenggarakan kelas Boarding)</span> 
                      </label>  
                    </div>
                    <div class="flex items-center justify-start space-x-4">
                      <input type="checkbox">
                      <label><span class="font-bold">Paket A/B/C</span> (Menyelenggarakan ujian Paket A/B/C)</label>  
                    </div>
                    
                </div>

                {{-- Catatan Verifikasi --}}
                <div class="flex justify-center items-center min-w-full my-10 text-green-600">
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                    <div class="p-1 bg-gray-100 text-center min-w-content text-2xl font-semibold">Catatan Verifikasi</div>
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                </div>
                <div class="text-teal-900 min-w-full mb-2 bg-teal-100 rounded-sm">
                    <p class="p-2 text-md font-semibold"><span class="font-bold">Info </span>Jika isi keterangan tambahan untuk verifikasi atau data - data yang belum tersedia seperti fasilitas, ekstrakulikuler / asosiasi.</p>
                </div>
                <textarea class="fe-input min-w-full border-2 outline-none" rows="6" placeholder="Masukkan catatan verifikasi / data informasi sekolah yang belum tersedia..."></textarea>

                {{-- Asosiasi Sekolah --}}
                <div class="flex justify-center items-center min-w-full my-10 text-green-600">
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                    <div class="p-1 bg-gray-100 text-center min-w-content text-2xl font-semibold">Asosiasi Sekolah</div>
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                </div>
                <div class="min-w-full grid grid-cols-2 gap-3 mb-2">
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Asosiasi</label>
                        <select class="fe-input min-w-full border-2 outline-none">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>

                {{-- Upload --}}
                <div class="flex justify-center items-center min-w-full my-10 text-green-600">
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                    <div class="p-1 bg-gray-100 text-center min-w-content text-2xl font-semibold">Logo, Foto, Brosur dan Video Sekolah</div>
                    <div class="h-[1px] bg-green-600 flex-1"></div>
                </div>
                <div class="text-teal-900 min-w-full mb-2 bg-teal-100 rounded-sm">
                    <p class="p-2 text-md font-semibold"><span class="font-bold">Perhatian </span>Brosur dan Photo Sekolah bisa lebih dari satu.</p>
                </div>
                <div class="min-w-full grid grid-cols-2 gap-3 mb-2">
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Video Profil (Youtube)</label>
                        <input class="fe-input min-w-full border-2 outline-none" placeholder="Masukkan url youtube...">
                    </div> 
                    <div>
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Logo Sekolah</label>
                        <div class="fe-input cursor-pointer flex items-center justify-center min-w-full border-2 border-dashed border-blue-600 min-h-44">
                            Drop files here or click to upload
                        </div>   
                    </div> 
                    <div class="col-span-2">
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Brosur Sekolah</label>
                        <div class="fe-input cursor-pointer flex items-center justify-center min-w-full border-2 border-dashed border-blue-600 min-h-44">
                            Drop files here or click to upload
                        </div>   
                    </div> 
                    <div class="col-span-2">
                        <label class="text-2xl text-green-600 font-semibold flex items-start mb-2">Photo Sekolah</label>
                        <div class="fe-input cursor-pointer flex items-center justify-center min-w-full border-2 border-dashed border-blue-600 min-h-44">
                            Drop files here or click to upload
                        </div>   
                    </div> 
                </div>
                <button class="min-w-full my-10 fe-input font-bold bg-green-600 text-white rounded-sm hover:shadow-xl transition duration-300">Submit</button>
            </form>
        </div>
    </div>
</x-layout>