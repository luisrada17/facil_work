<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
<div>
    @if (Route::has('login'))
        <div class="lg:fixed lg:top-0 lg:right-0 p-4 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="text-lg text-gray-200 hover:text-blue-700 dark:text-gray-300 dark:hover:text-white
 focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-500"></a>
            @else
                <div class="flex gap-10 pr-4 text-lg">
                    <a href="{{ route('login') }}"
                        class='inline-flex items-center px-3 pt-3 leading-5 text-lg text-gray-300
 hover:text-gray-300 dark:text-gray-300 hover:shadow-lg hover:shadow-gray-100 hover:p-1 hover:bg-gray-700
 hover:rounded'>Ingresar
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class='inline-flex items-center px-3 pt-3 leading-5 text-lg text-gray-300
 hover:text-gray-300 dark:text-gray-300 hover:shadow-lg hover:shadow-gray-100 hover:p-1 hover:bg-gray-700
 hover:rounded'>Registro</a>


                </div>
        @endif
    @endauth
</div>
@endif
</div>
