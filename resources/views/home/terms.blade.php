<x-guest-layout>
    <div>
        <livewire:navbar />
    </div>
    <div class="pt-4 bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div
                class="w-full sm:max-w-2xl mt-6 p-6 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg prose dark:prose-invert">
                {{-- {!! $terms !!} --}}
                <h1>Términos y Condiciones</h1>
            </div>
        </div>
    </div>
</x-guest-layout>
