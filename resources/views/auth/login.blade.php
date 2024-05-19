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
</head>
<body class="min-w-full h-screen bg-gray-200 flex justify-center items-center">
    <div class="flex flex-col justify-center items-center text-gray-800">
        <h1 class="text-3xl mb-8">Sekolah <span class="font-bold">Sunnah</span></h1>
        <div class="p-4 bg-white rounded-sm w-[400px] text-center">
            <form action="">
                <div class="text-light mb-4">Sign in to start your session</div>
                <div class="relative mb-4">
                    <input class="p-2 border-[1px] border-gray-300 w-full outline-[0.3px] outline-sky-600" placeholder="Email">
                    <div class="text-gray-400 absolute top-3 right-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 4H2v16h20zm-2 4l-8 5l-8-5V6l8 5l8-5z"/></svg>
                    </div>
                </div>
                <div class="relative">
                    <input type="password" class="p-2 border-[1px] border-gray-300 w-full outline-[0.3px] outline-sky-600" placeholder="Password">
                    <div class="text-gray-400 absolute top-2 right-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21V9h3V7q0-1.671 1.165-2.835Q10.329 3 12 3t2.836 1.165T16 7v2h3v12zm7-4.5q.633 0 1.066-.434q.434-.433.434-1.066t-.434-1.066T12 13.5t-1.066.434Q10.5 14.367 10.5 15t.434 1.066q.433.434 1.066.434M9 9h6V7q0-1.25-.875-2.125T12 4t-2.125.875T9 7z"/></svg>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex justify-center items-center space-x-2">
                        <input type="checkbox" name="" id="">
                        <label for="">Remember me</label>
                    </div>
                    <button class="bg-sky-600 text-white px-4 py-2 hover:bg-sky-800">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>