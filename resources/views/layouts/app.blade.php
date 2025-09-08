<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900"">
        <div class="flex flex-1 ">
            <x-sidevar />
            <div class="p-4 sm:ml-64 flex justify-center w-full">
                <div class=" relative overflow-x-auto shadow-md sm:rounded-lg w-full bg-white dark:bg-gray-800 p-14">
                     @isset($header)
                        <header class="bg-blue-900  shadow rounded mb-1">
                          <div class="max-w-7xl  flex items-center justify-between mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                         </div>
                    </header>
                    @endisset     
                        {{ $slot }}
                </div>
            </div>    
        </div>
         <footer class="flex justify-between p-2 ml-64 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 h-16 flex items-center justify-center">    
                <!-- Texto -->
                <p class="text-sm">
                    © {{ date('Y') }} <span class="font-semibold text-orange-500">Futbol de Veteranos Bella Vista</span>. Todos los derechos reservados.
                </p>

            <!-- Línea divisoria -->
                <div class="border-t border-gray-300 dark:border-gray-700 mt-2"></div>

                <!-- Créditos del diseñador -->
                <div class="text-center py-2 text-sm text-gray-500 dark:text-gray-400">
                    Diseñado y desarrollado por 
                    <span class="font-semibold text-orange-500">César Méndez</span>
                </div>
        </footer>
             
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        @livewireScripts

    </body>
</html>
