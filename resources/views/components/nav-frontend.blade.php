<div wire:ignore.self>
    <nav x-data="{ open: false }" x-cloak
        class="bg-[#0A2A5E] dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-[#0A2A5E] dark:border-gray-600">

        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <!-- Logo -->
            <a href="{{ route('pagina.principal') }}" class="flex items-center py-1.5 text-base font-semibold">
                <img src="{{ asset('images/logoVeteranos.jpeg') }}" alt="Logo de Futbol de Veteranos"
                    class="w-8 h-8 lg:w-16 lg:h-16 rounded-full">
            </a>

            <!-- Menu Desktop -->
            <div class="hidden lg:block">
                <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                    <li><a href="{{ route('pagina.principal') }}" wire:navigate
                            class="text-slate-100 hover:underline">Inicio</a></li>
                    <li><a href="{{ route('tabla-posicion-index') }}" wire:navigate
                            class="text-slate-100 hover:underline">Tabla Posición</a></li>
                    <li><a href="{{ route('frontend.fixture.index') }}" wire:navigate
                            class="text-slate-100 hover:underline">Fixture </a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/dashboard') }}" wire:navigate
                                    class="text-slate-100 hover:underline">Panel</a></li>
                        @else
                            <li><a href="{{ route('login') }}" wire:navigate
                                    class="text-slate-100 hover:underline">Ingresar</a></li>
                        @endauth
                    @endif
                </ul>
            </div>

            <!-- Botón Menu Móvil -->
            <button @click="open = !open" class="text-slate-100 lg:hidden p-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Menu Móvil -->
        <div x-show="open" x-transition class="lg:hidden bg-[#0A2A5E] dark:bg-gray-900">
            <ul class="flex flex-col gap-2 p-4">
                <li><a href="{{ route('pagina.principal') }}" class="text-slate-100 hover:underline">Inicio</a></li>
                <li><a href="{{ route('tabla-posicion-index') }}" wire:navigate
                        class="text-slate-100 hover:underline">Tabla
                        Posición</a></li>
                <li><a href="{{ route('frontend.fixture.index') }}" wire:navigate
                        class="text-slate-100 hover:underline">Fixture</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}" wire:navigate
                                class="text-slate-100 hover:underline">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" wire:navigate class="text-slate-100 hover:underline">Login</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </nav>
</div>
