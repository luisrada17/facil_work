<nav class="bg-gray-900 shadow-md shadow-gray-500">
    <div class="flex items-center justify-between px-4 py-2 mx-auto">
        <x-dropdown align="left" width="60">
            <x-slot name="trigger">
                <span class="inline-flex w-10 rounded-md cursor-pointer">
                    <img src="{{ asset('images/sn-icons/menu.png') }}" alt="menu">
                </span>
            </x-slot>

            <x-slot name="content">
                <div class="w-60">

                    <!-- Team Settings -->
                    <x-dropdown-link href="">
                        {{ __('Primeros Pasos...') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="">
                        {{ __('Coméntanos...') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="">
                        {{ __('Sobre Nosotros') }}
                    </x-dropdown-link>
                </div>
            </x-slot>
        </x-dropdown>
        <div class="flex w-16 space-x-4">
            <a href="{{ route('home') }}"><img src="{{ asset('images/sn-icons/logofw.png') }}" alt=""></a>

        </div>

        <x-dropdown align="right" width="60">
            <x-slot name="trigger">
                <span class="inline-flex w-10 rounded-md cursor-pointer">
                    <x-application-logo />
                </span>
            </x-slot>

            <x-slot name="content">
                <div class="w-60">

                    <x-dropdown-link href="{{ route('policy') }}">
                        {{ __('Políticas de trabajo') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="{{ route('register') }}">
                        {{ __('Registrar') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="{{ route('login') }}">
                        {{ __('Iniciar sesión') }}
                    </x-dropdown-link>
                </div>
            </x-slot>
        </x-dropdown>
    </div>
</nav>
