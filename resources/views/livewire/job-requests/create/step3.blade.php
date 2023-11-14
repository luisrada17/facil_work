<div>
    <h3 class="mb-24 font-mono text-4xl">Ayúdanos a aclarar <br> tu necesidad</h3>
    <p class="mb-24 font-sans text-3xl">Selecciona un lugar</p>

    <div class="flex justify-around mb-12" x-data="{ selectedCheckbox: null }">
        <div class="w-16 rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'kitchen' }">
            <input type="checkbox" id="kitchen" wire:model="place" value="Cocina" class="hidden"
                @click="selectedCheckbox = 'kitchen'" :checked="selectedCheckbox === 'kitchen'">
            <label for="kitchen" class="w-full h-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="#eeeeee" class="w-full m-2 mx-auto"
                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M240 144A96 96 0 1 0 48 144a96 96 0 1 0 192 0zm44.4 32C269.9 240.1 212.5 288 144 288C64.5 288 0 223.5 0 144S64.5 0 144 0c68.5 0 125.9 47.9 140.4 112h71.8c8.8-9.8 21.6-16 35.8-16H496c26.5 0 48 21.5 48 48s-21.5 48-48 48H392c-14.2 0-27-6.2-35.8-16H284.4zM144 80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM400 240c13.3 0 24 10.7 24 24v8h96c13.3 0 24 10.7 24 24s-10.7 24-24 24H280c-13.3 0-24-10.7-24-24s10.7-24 24-24h96v-8c0-13.3 10.7-24 24-24zM288 464V352H512V464c0 26.5-21.5 48-48 48H336c-26.5 0-48-21.5-48-48zM48 320h80 16 32c26.5 0 48 21.5 48 48s-21.5 48-48 48H160c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V336c0-8.8 7.2-16 16-16zm128 64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160v32h16zM24 464H200c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24z" />
                </svg>
                <p class="mx-2 mb-2 text-xs">Cocina</p>
            </label>
        </div>

        <div class="w-16 rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'bathroom' }">
            <input type="checkbox" id="bathroom" wire:model="place" value="Baño" class="hidden"
                @click="selectedCheckbox = 'bathroom'" :checked="selectedCheckbox === 'bathroom'">
            <label for="bathroom" class="w-full h-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="#eeeeee" class="w-full m-2 mx-auto"
                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3V256c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H96V77.3zM32 352v16c0 28.4 12.4 54 32 71.6V480c0 17.7 14.3 32 32 32s32-14.3 32-32V464H384v16c0 17.7 14.3 32 32 32s32-14.3 32-32V439.6c19.6-17.6 32-43.1 32-71.6V352H32z" />
                </svg>
                <p class="mx-2 mb-2 text-xs">Baño</p>
            </label>
        </div>

        <div class="w-16 rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'garage' }">
            <input type="checkbox" id="garage" wire:model="place" value="Garaje" class="hidden"
                @click="selectedCheckbox = 'garage'" :checked="selectedCheckbox === 'garage'">
            <label for="garage" class="w-full h-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="#eeeeee" class="w-full m-2 mx-auto"
                    viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M0 488V171.3c0-26.2 15.9-49.7 40.2-59.4L308.1 4.8c7.6-3.1 16.1-3.1 23.8 0L599.8 111.9c24.3 9.7 40.2 33.3 40.2 59.4V488c0 13.3-10.7 24-24 24H568c-13.3 0-24-10.7-24-24V224c0-17.7-14.3-32-32-32H128c-17.7 0-32 14.3-32 32V488c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zm488 24l-336 0c-13.3 0-24-10.7-24-24V432H512l0 56c0 13.3-10.7 24-24 24zM128 400V336H512v64H128zm0-96V224H512l0 80H128z" />
                </svg>
                <p class="mx-2 mb-2 text-xs">Garaje</p>
            </label>
        </div>

        <div class="w-16 rounded-lg cursor-pointer hover:bg-gray-500 active:bg-[#336699]"
            :class="{ 'bg-[#336699]': selectedCheckbox === 'other' }">
            <input type="checkbox" id="other" wire:model="place" value="Other" class="hidden"
                @click="selectedCheckbox = 'other'" :checked="selectedCheckbox === 'other'">
            <label for="other" class="w-full h-full cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" fill="#eeeeee" class="w-full m-2 mx-auto"
                    viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M0 488V171.3c0-26.2 15.9-49.7 40.2-59.4L308.1 4.8c7.6-3.1 16.1-3.1 23.8 0L599.8 111.9c24.3 9.7 40.2 33.3 40.2 59.4V488c0 13.3-10.7 24-24 24H568c-13.3 0-24-10.7-24-24V224c0-17.7-14.3-32-32-32H128c-17.7 0-32 14.3-32 32V488c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zm488 24l-336 0c-13.3 0-24-10.7-24-24V432H512l0 56c0 13.3-10.7 24-24 24zM128 400V336H512v64H128zm0-96V224H512l0 80H128z" />
                </svg>
                <p class="mx-2 mb-2 text-xs">Otro</p>
            </label>
        </div>

    </div>
    <div class="mx-auto mb-4 text-center">
        <x-input-error for="place" />
    </div>
</div>
