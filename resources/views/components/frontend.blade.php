<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Veteranos BV' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-black dark:text-white">
    
    <x-nav-frontend />

    <main class="container mx-auto mt-24 px-4">
        {{ $slot }}
    </main>
     <footer class="flex justify-between p-2  bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 h-16  items-center ">    
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
</body>
</html>
