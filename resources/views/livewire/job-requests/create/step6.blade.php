<div>
    <h3 class="mb-24 font-mono text-4xl">Ayúdanos a aclarar <br> tu necesidad</h3>
    <p class="mb-12 font-sans text-3xl">Programemos la fecha</p>

    <div class="flex justify-around w-full mb-12 text-gray-200">
        <input
            class="mb-6 text-2xl text-black bg-transparent border-white rounded-lg shadow-lg cursor-pointer focus:ring-0 focus:border-yellow-700 h-28 shadow-white invert"
            type="datetime-local" name="date-job-request" wire:model="date">

    </div>
    <div class="mx-auto mb-4 text-center">
        <x-input-error for="date" />
    </div>
</div>
