<x-guest-layout>

    <div class="pt-4 dark:bg-gray-900">
        <div class="flex flex-col items-center min-h-screen pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div class="w-full p-6 mt-6 overflow-hidden prose text-center bg-white shadow-md sm:max-w-2xl sm:rounded-lg">
                {{-- {!! $policy !!} --}}
                <h1>Políticas de privacidad</h1>
            </div>
        </div>
    </div>
</x-guest-layout>
