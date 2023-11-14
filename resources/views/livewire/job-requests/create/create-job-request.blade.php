<div>
    <x-guest-layout>
        <div class="flex w-full h-[93.5vh] font-sans font-semibold text-center text-gray-100">
            <div class="flex flex-col items-end justify-center w-3/5">
                <div class="flex flex-col justify-around w-3/5 mx-auto font-mono text-4xl font-semibold">

                    @if ($step == 1)
                        <livewire:job-requests.create.step1 :description="$description" />
                    @elseif ($step == 2)
                        <livewire:job-requests.create.step2 :location="$location" />
                    @elseif ($step == 3)
                        <livewire:job-requests.create.step3 :place="$place" />
                    @elseif ($step == 4)
                        <livewire:job-requests.create.step4 :tools="$tools" />
                    @elseif ($step == 5)
                        <livewire:job-requests.create.step5 :image="$image" />
                    @elseif ($step == 6)
                        <livewire:job-requests.create.step6 :date="$date" />
                    @elseif ($step == 7)
                        <livewire:job-requests.create.step7 :address="$address" />
                    @elseif ($step == 8)
                        <livewire:job-requests.create.step8 />
                    @endif

                    @if ($step == 1)
                        <div class="text-center">
                            <button wire:click="nextStep" class="text-2xl hover:bg-[#336699] rounded-lg py-2">
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        fill="currentColor" class="w-full bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    @elseif($step > 7)
                        <div class="flex justify-center">
                            <div>
                                <button wire:click="beforeStep"
                                    class="text-2xl font-bold hover:bg-[#336699] rounded-lg py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="text-center">
                                <button wire:click="nextStep"
                                    class="text-2xl hover:bg-[#336699] rounded-lg py-2 active:bg-[#336699]">
                                    <div class="text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                            fill="currentColor" class="w-full" viewBox="0 0 448 512">
                                            <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                                d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="flex justify-center">
                            <div>
                                <button wire:click="beforeStep"
                                    class="text-2xl font-bold hover:bg-[#336699] rounded-lg py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="text-center">
                                <button wire:click="nextStep"
                                    class="text-2xl hover:bg-[#336699] rounded-lg py-2 active:bg-[#336699]">
                                    <div class="text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                            fill="currentColor" class="w-full bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" stroke="#eeeeee" stroke-width="1.3"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="flex flex-col w-2/5 pl-10 mt-4 overflow-y-scroll font-sans text-2xl bg-gray-900">
                @if ($step == 1)
                    <div class="flex flex-col justify-around h-full text-left">
                        <a href="{{ route('blog') }}">Primeros Pasos</a>
                        <a href="{{ route('policy') }}">Políticas</a>
                        <a href="{{ route('about') }}">Sobre Nosotros</a>
                    </div>
                @elseif($step > 1)
                    <h3 class="py-2 mt-10 mr-4 text-3xl rounded-lg">Informe</h3>
                    <div class="mt-10 mr-4 text-left">
                        <div class="flex py-2 pl-3 mb-2 rounded-lg">
                            <h1 class="w-1/4">Solicitud:</h1>
                            <h1 class="w-3/4 pl-10 text-xl">{{ $description }}</h1>
                        </div>
                        <div class="flex py-2 pl-3 mb-2 rounded-lg">
                            <h1 class="w-1/4">Categoría:</h1>
                            <h1 class="w-3/4 pl-10 text-xl">{{ $categoryName }}</h1>
                        </div>
                        <div class="flex py-2 pl-3 mb-2 rounded-lg">
                            <h1 class="w-1/4">Habilidad:</h1>
                            <h1 class="w-3/4 pl-10 text-xl">{{ $skillName }}</h1>
                        </div>
                        <div class="flex py-2 pl-3 mb-2 rounded-lg">
                            <h1 class="w-1/4">Ubicación:</h1>
                            <h1 class="w-3/4 pl-10 text-xl">{{ $location }}</h1>
                        </div>
                        <div class="flex py-2 pl-3 mb-2 rounded-lg">
                            <h1 class="w-1/4">Lugar:</h1>
                            <h1 class="w-3/4 pl-10 text-xl">{{ $place }}</h1>
                        </div>
                        <div class="flex py-2 pl-3 mb-2 rounded-lg">
                            <h1 class="w-1/4">Herramientas:</h1>
                            <h1 class="w-3/4 pl-10 text-xl">{{ $tools }}</h1>
                        </div>
                        <div class="flex py-2 pl-3 mb-2 rounded-lg">
                            <h1 class="w-1/4">Imágenes:</h1>
                            <h1 class="w-3/4 pl-10 text-xl">{{ $image }}</h1>
                        </div>
                        <div class="flex py-2 pl-3 mb-2 rounded-lg">
                            <h1 class="w-1/4">Fecha:</h1>
                            <h1 class="w-3/4 pl-10 text-xl">{{ $date }}</h1>
                        </div>
                        <div class="flex py-2 pl-3 mb-2 rounded-lg">
                            <h1 class="w-1/4">Dirección:</h1>
                            <h1 class="w-3/4 pl-10 text-xl">{{ $address }}</h1>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </x-guest-layout>
</div>
