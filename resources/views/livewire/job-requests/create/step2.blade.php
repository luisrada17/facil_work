<div>
    <h3 class="mb-24 font-mono text-4xl">Ayúdanos a aclarar <br> tu necesidad</h3>
    <p class="mb-24 font-sans text-3xl">Selecciona tipo de locación</p>

    <div class="flex justify-around mb-12" x-data="{ selectedCheckbox: null }">
        <div class="w-16 rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'house' }">
            <input type="checkbox" id="house" wire:model="location" value="Casa" class="hidden"
                @click="selectedCheckbox = 'house'" :checked="selectedCheckbox === 'house'">
            <label for="house" class="w-full h-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="#eeeeee" class="w-full m-2 mx-auto"
                    viewBox="0 0 576
                512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L512 185V64c0-17.7-14.3-32-32-32H448c-17.7 0-32 14.3-32 32v36.7L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32v69.7c-.1 .9-.1 1.8-.1 2.8V472c0 22.1 17.9 40 40 40h16c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2H160h24c22.1 0 40-17.9 40-40V448 384c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v64 24c0 22.1 17.9 40 40 40h24 32.5c1.4 0 2.8 0 4.2-.1c1.1 .1 2.2 .1 3.3 .1h16c22.1 0 40-17.9 40-40V455.8c.3-2.6 .5-5.3 .5-8.1l-.7-160.2h32z" />
                </svg>
                <p class="mx-2 mb-2 text-xs">Casa</p>
            </label>
        </div>
        <div class="rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'apartment' }">
            <input type="checkbox" id="department" wire:model="location" value="Apartamento" class="hidden"
                @click="selectedCheckbox = 'apartment'" :checked="selectedCheckbox === 'apartment'">
            <label for="department" class="w-full h-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="#eeeeee" class="w-full m-2 mx-auto"
                    viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                </svg>
                <p class="mx-2 text-xs">Apartamento</p>
            </label>
        </div>
        <div class="w-16 rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'store' }">
            <input type="checkbox" id="store" wire:model="location" value="Negocio" class="hidden"
                @click="selectedCheckbox = 'store'" :checked="selectedCheckbox === 'store'">
            <label for="store" class="w-full h-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="#eeeeee" class="w-full m-2 mx-auto"
                    viewBox="0 0 576
                    512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M547.6 103.8L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4zM499.7 254.9l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V384H128V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 252.6c-4 1-8 1.8-12.3 2.3z" />
                </svg>
                <p class="mx-2 text-xs">Negocio</p>
            </label>
        </div>
        <div class="w-16 rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'church' }">
            <input type="checkbox" id="church" wire:model="location" value="Iglesia" class="hidden"
                @click="selectedCheckbox = 'church'" :checked="selectedCheckbox === 'church'">
            <label for="church" class="w-full h-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="#eeeeee" class="w-full m-2 mx-auto"
                    viewBox="0 0 640
                    512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M344 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V48H264c-13.3 0-24 10.7-24 24s10.7 24 24 24h32v46.4L183.3 210c-14.5 8.7-23.3 24.3-23.3 41.2V512h96V416c0-35.3 28.7-64 64-64s64 28.7 64 64v96h96V251.2c0-16.9-8.8-32.5-23.3-41.2L344 142.4V96h32c13.3 0 24-10.7 24-24s-10.7-24-24-24H344V24zM24.9 330.3C9.5 338.8 0 354.9 0 372.4V464c0 26.5 21.5 48 48 48h80V273.6L24.9 330.3zM592 512c26.5 0 48-21.5 48-48V372.4c0-17.5-9.5-33.6-24.9-42.1L512 273.6V512h80z" />
                </svg>
                <p class="mx-2 text-xs">Iglesia</p>
            </label>

        </div>

    </div>
    <div class="mx-auto mb-4 text-center">
        <x-input-error for="location" />
    </div>
</div>
