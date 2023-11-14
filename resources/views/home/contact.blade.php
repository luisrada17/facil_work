<x-guest-layout>
    <div class="h-screen">
        <livewire:navbar />
        <!-- Formulario de Contacto -->
        <div class="flex flex-col justify-center w-1/2 mx-auto pt-11 h-5/6">
            <form class="p-6 bg-white rounded-md shadow-md dark:bg-gray-800 dark:shadow-gray-400">
                <div class="mb-4">
                    <label for="nombre"
                        class="block mb-2 text-lg font-medium text-gray-700 dark:text-gray-400">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"
                        class="w-full p-2 border-gray-300 rounded-md dark:border-gray-600 focus:outline-none focus:border-green-500"
                        requigreen>
                </div>
                <div class="mb-4">
                    <label for="correo" class="block mb-2 text-lg font-medium text-gray-700 dark:text-gray-400">Correo
                        Electrónico:</label>
                    <input type="email" id="correo" name="correo"
                        class="w-full p-2 border-gray-300 rounded-md dark:border-gray-600 focus:outline-none focus:border-green-500"
                        requigreen>
                </div>
                <div class="mb-4">
                    <label for="mensaje"
                        class="block mb-2 text-lg font-medium text-gray-700 dark:text-gray-400">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" rows="4"
                        class="w-full p-2 border-gray-300 rounded-md dark:border-gray-600 focus:outline-none focus:border-green-500"
                        requigreen></textarea>
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="px-6 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Enviar
                        Mensaje</button>
                </div>
            </form>
        </div>

    </div>
</x-guest-layout>
