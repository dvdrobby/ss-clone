<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <title>{{ $title }}</title>

        <!-- Styles -->
        
    </head>
    <body class="antialiased dark:bg-black dark:text-white min-w-full bg-gray-100">
        <div class="flex min-w-full min-h-screen justify-start items-center">
            <section class="h-screen bg-white px-4 py-8 border-r-2 border-gray-300 w-[300px] overflow-hidden">
                <div class="w-[200px] mb-10">
                    <img src="https://sekolahsunnah.com/FrontEnd/assets/img/logo-ss-b.png" alt="">
                </div>
                <div class="mb-10">
                    Hallo, <span class="font-bold">Admin</span>
                </div>
                <aside class="overflow-hidden flex flex-col h-full bg-slate-300">
                    <div class="mb-4">
                        <div class="flex items-center justify-start min-w-full space-x-1 cursor-pointer mb-2">
                            <div class="font-semibold ">Dashboard</div>
                            <div class="border-b-[1px] border-gray-300 flex-1"></div>
                        </div>
                        <div class="flex flex-col">
                           <div class="p-2 hover:bg-green-300 cursor-pointer min-w-full hover:translate-x-6 transition duration-300">
                                <a href="" class="text-semibold p-2 min-w-full">Add User</a>
                            </div>  
                           <div class="p-2 hover:bg-green-300 cursor-pointer min-w-full hover:translate-x-6 transition duration-300">
                                <a href="" class="text-semibold p-2 min-w-full">Verifikasi Data</a>
                            </div>  
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center justify-start min-w-full space-x-1 cursor-pointer mb-2">
                            <div class="font-semibold ">Dashboard</div>
                            <div class="border-b-[1px] border-gray-300 flex-1"></div>
                        </div>
                        <div class="flex flex-col">
                           <div class="p-2 hover:bg-green-300 cursor-pointer min-w-full hover:translate-x-6 transition duration-300">
                                <a href="" class="text-semibold p-2 min-w-full">Add User</a>
                            </div>  
                           <div class="p-2 hover:bg-green-300 cursor-pointer min-w-full hover:translate-x-6 transition duration-300">
                                <a href="" class="text-semibold p-2 min-w-full">Verifikasi Data</a>
                            </div>  
                        </div>
                    </div>

                    <div class="flex-1 bg-slate-500 flex items-end">
                        <a href="">Log Out</a>
                    </div>

                </aside>
            </section>

            {{-- Content --}}
            <section></section>
        </div>
    </body>
</html>
