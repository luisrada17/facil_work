<div>
    {{-- Encabezado --}}
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-semibold text-gray-800">Gestión de Categorías</h1>
        <button wire:click="resetForm"
            class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600">Nueva Categoría</button>
    </div>

    {{-- Formulario para agregar categorías --}}
    @if ($addingCategory)
        <div class="p-4 mb-4 bg-white rounded-lg shadow-lg">
            <h2 class="mb-2 text-lg font-semibold text-gray-800">Agregar Nueva Categoría</h2>
            <form wire:submit.prevent="addCategory">
                <div class="flex">
                    <input wire:model.defer="name" type="text"
                        class="w-full px-3 py-2 mr-2 text-gray-800 bg-gray-200 rounded focus:outline-none focus:border-blue-500"
                        placeholder="Nombre de la categoría">
                    <button type="submit"
                        class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600">Guardar</button>
                    <button wire:click="resetForm" type="button"
                        class="px-4 py-2 font-semibold text-gray-800 bg-gray-300 rounded hover:bg-gray-400">Cancelar</button>
                </div>
                @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </form>
        </div>
    @endif

    {{-- Lista de categorías --}}
    <div class="bg-white rounded-lg shadow-lg">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th
                        class="px-6 py-3 text-xs font-semibold leading-4 tracking-wider text-left text-gray-800 uppercase border-b-2 border-gray-200">
                        Nombre</th>
                    <th
                        class="px-6 py-3 text-xs font-semibold leading-4 tracking-wider text-left text-gray-800 uppercase border-b-2 border-gray-200">
                        Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td
                            class="px-6 py-4 text-sm leading-5 text-gray-800 whitespace-no-wrap border-b border-gray-200">
                            {{ $category->name }}</td>
                        <td class="px-6 py-4 text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200">
                            <button wire:click="editCategory({{ $category->id }})"
                                class="text-blue-500 hover:text-blue-600">Editar</button>
                            <button wire:click="deleteCategory({{ $category->id }})"
                                class="text-red-500 hover:text-red-600">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function() {
                Livewire.on('categoryAdded', () => {
                    // Mostrar una notificación de categoría agregada (puedes usar una biblioteca como SweetAlert)
                });

                Livewire.on('categoryUpdated', () => {
                    // Mostrar una notificación de categoría actualizada
                });

                Livewire.on('categoryDeleted', () => {
                    // Mostrar una notificación de categoría eliminada
                });
            });
        </script>
    @endpush
</div>
