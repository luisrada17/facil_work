{{-- <footer class="bg-gray-300 dark:bg-gray-700 py-4 shadow-inner shadow-gray-900">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
                <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Servicios</h3>
                <p class="text-gray-600 dark:text-gray-300">Item 1</p>
                <p class="text-gray-600 dark:text-gray-300">Item 2</p>
                <p class="text-gray-600 dark:text-gray-300">Item 3</p>
                <p class="text-gray-600 dark:text-gray-300">Item 4</p>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
                <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Enlaces rápidos</h3>
                <ul class="list-none">
                    <li><a href="#"
                            class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200">Item
                            1</a>
                    </li>
                    <li><a href="#"
                            class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200">Item 2
                        </a></li>
                    <li><a href="#"
                            class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200">Item
                            3</a>
                    </li>
                    <li><a href="#"
                            class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200">Item
                            4</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
                <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-2">Redes sociales</h3>
                <ul class="list-none flex justify-start">
                    <li><a href="#"
                            class="text-gray-600 dark:text-gray-300 px-4 hover:text-gray-800 dark:hover:text-gray-200"><i
                                class="fab fa-facebook"></i></a></li>
                    <li><a href="#"
                            class="text-gray-600 dark:text-gray-300 px-4 hover:text-gray-800 dark:hover:text-gray-200"><i
                                class="fab fa-twitter"></i></a></li>
                    <li><a href="#"
                            class="text-gray-600 dark:text-gray-300 px-4 hover:text-gray-800 dark:hover:text-gray-200"><i
                                class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer> --}}


<div class="flex justify-around bg-gray-900 py-4 text-md shadow-inner shadow-gray-500 text-gray-200">
    <div class="p-3">
        <h1 class="font-semibold text-lg">Contacto</h1>
        <p><b>Correo:</b> example-number@example.com</p>
        <p><b>Teléfono:</b> 12345678</p>
    </div>
    <div class="p-3">
        <h1 class="font-semibold text-lg text-center">Servicios</h1>
        <div class="flex">
            <div>
                <p class="mx-2">Reparaciones domésticas</p>
                <p class="mx-2">Reparaciones electrónicas</p>
                <p class="mx-2">Reparaciones de Plomería</p>
            </div>
            <div>
                <p class="mx-2">Mantenimientos perventivos</p>
                <p class="mx-2">Mantenimientos correctivos</p>
                <p class="mx-2">Mantenimientos predictivo</p>
            </div>
        </div>

    </div>
    <div class="p-3 text-center">
        <h1 class="font-semibold text-lg">Redes Sociales</h1>
        <ul class="list-none flex justify-center">
            <li class="m-2"><a href="https://facebook.com"
                    class="text-gray-600 dark:text-gray-300 px-4 hover:text-gray-800 dark:hover:text-gray-200"><img
                        src="{{ asset('images/sn-icons/facebook.svg') }}" alt="Facebook"
                        class="rounded-full h-9 w-9  hover:bg-gray-50"></a></li>
            <li class="m-2"><a href="https://twitter.com"
                    class="text-gray-600 dark:text-gray-300 px-4 hover:text-gray-800 dark:hover:text-gray-200 "><img
                        src="{{ asset('images/sn-icons/twitter.svg') }}" alt="Twitter"
                        class="rounded-full h-9 w-9  hover:bg-gray-50"></a></li>
            <li class="m-2"><a href="https://instagram.com"
                    class="text-gray-600 dark:text-gray-300 px-4 hover:text-gray-800 dark:hover:text-gray-200"><img
                        src="{{ asset('images/sn-icons/instagram.svg') }}" alt="Instagram"
                        class="rounded-full h-9 w-9  hover:bg-gray-50"></a></li>
        </ul>
    </div>
    <div class="p-3 text-end">
        <h1 class="font-semibold text-lg">Términos de Servicio</h1>

        <p class="text-md"><a href="#" class="underline">términos y condiciones</a></p>

        <p><a href="https://google.com/" class="underline"> términos de servicio de Google</a>.</p>
        &copy; 2023
    </div>

</div>
