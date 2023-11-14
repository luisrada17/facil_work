<!-- resources/views/livewire/responsive-navbar.blade.php -->
<div class="bg-gray-500 py-4">
    <div class="container mx-auto flex items-center justify-between px-4">
        <div class="text-white font-bold text-xl flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Fácil Work Logo"
                class="border-2 border-gray-200 rounded-full w-12 h-12 mr-2">
            <span class="text-2xl">Fácil Work</span>
        </div>
        <button wire:click="toggleDarkMode" class="text-white focus:outline-none p-2 hover:bg-gray-600 rounded">
            @if ($isDarkMode)
                <i class="fas fa-sun"></i>
            @else
                <i class="fas fa-moon"></i>
            @endif
        </button>
        <!-- Botón de hamburguesa -->
        <button wire:click="toggleMenu"
            class="lg:hidden text-white focus:outline-none p-2 hover:bg-gray-600 rounded">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <!-- Menú desplegable para dispositivos móviles -->
    @if ($isMenuOpen)
        <nav class="lg:hidden">
            <ul class="text-white flex flex-col space-y-4">
                <livewire:nav-link :href="route('about')" :active="request()->routeIs('about')">Sobre Nosotros</livewire:nav-link>
                <livewire:nav-link :href="route('contact')" :active="request()->routeIs('contact')">Contáctanos</livewire:nav-link>
                <livewire:nav-link :href="route('blog')" :active="request()->routeIs('blog')">Blog</livewire:nav-link>
                <livewire:nav-link :href="route('services')" :active="request()->routeIs('services')">Servicios</livewire:nav-link>
            </ul>
        </nav>
        <!-- Componente de login y registro -->
        <div class="mt-4">
            <x-login-register :isDarkMode="$isDarkMode" />
        </div>
    @endif
</div>
