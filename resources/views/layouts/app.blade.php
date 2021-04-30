<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.2.45/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="css/tailwind.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        @livewireStyles
    </head>
    <body class="md:bg-gray-300 md:py-6 md:h-screen">
        <main class="mx-auto md:max-w-sm md:bg-white md:h-full 2xl:h-5/6 md:shadow-xl md:overflow-y-auto">
            <header>
                <ul class="bg-opacity-10 bg-black sticky top-0 hidden md:flex items-center justify-end px-2">
                    <li>
                        <i class="mdi mdi-wifi-strength-4"></i>
                    </li>
                    <li>
                        <i class="mdi mdi-network-strength-4"></i>
                    </li>
                    <li>
                        <i class="mdi mdi-battery"></i>
                    </li>
                </ul>
            </header>
            {{ $slot }}
        </main>
        @livewireScripts
    </body>
</html>
