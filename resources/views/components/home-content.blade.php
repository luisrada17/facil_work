<div class="mx-auto px-4 py-8 w-1/2">
    <div class="text-center relative">

        <img class="shadow-md shadow-gray-400 h-96 w-full object-cover rounded-md"
            src="{{ asset('images/worker20.jpg') }}" alt="Fácil Work">

        <div class="absolute top-4 w-full mt-8">
            <div>
                <h1 class="text-6xl font-extrabold text-lime-500 dark:text-white mb-6"
                    style="text-shadow: 0 4px 2px rgb(255, 255, 255);">FÁCIL WORK</h1>
            </div>
            <div>
                <h2 class="text-4xl font-semibold text-gray-200 dark:text-white mb-8 px-2">La solución a todos tus
                    problemas!
                </h2>
            </div>
            <div>
                <x-input
                    class="w-3/4 mt-20 border-2 focus:border-4 border-gray-700 focus:border-emerald-400 text-gray-900"
                    placeholder="¿En qué te podemos ayudar?" />
            </div>
        </div>

        <div class="mt-20">

            <style>
                #div-boton {
                    background-color: #86fc86;
                    box-shadow: 3px 3px 6px #34fd34;
                }

                #div-boton:hover {
                    background: #62fa62;
                    box-shadow: 3px 3px 6px #c1fdc1;

                }
            </style>
            <div id="div-boton" class="border-b-2  text-green-900 px-2 py-2 mt-6 rounded w-56 mx-auto">
                <a href="{{ route('register') }}">Enviar Solicitud</a>
            </div>

        </div>
    </div>

</div>
