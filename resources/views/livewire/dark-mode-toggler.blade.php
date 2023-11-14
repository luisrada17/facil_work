
<!-- resources/views/livewire/dark-mode-toggler.blade.php -->
<div>
    <button wire:click="toggleDarkMode"
        class="text-white focus:outline-none p-2 hover:bg-gray-600 rounded">
        @if ($isDarkMode)
            <i class="fas fa-sun"></i>
        @else
            <i class="fas fa-moon"></i>
        @endif
    </button>
</div>
