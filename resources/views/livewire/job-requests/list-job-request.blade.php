<div>
    <div class="min-h-screen font-sans text-gray-900 bg-gray-700 dark:text-gray-100">
        @livewire('navigation-menu')

        <!-- Check if there are jobRequests before rendering the table and its header -->
        @if ($jobRequests->count() > 0)
            <div>
                <div class="w-1/4 mt-2 rounded-lg">
                    <div class="float-right mr-8">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" class="absolute my-3 cursor-pointer"
                            viewBox="0 0 512 512">
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg>
                    </div>
                </div>

                <div class="flex">
                    <!-- Input de búsqueda -->
                    <input type="text" name="search" wire:model.lazy="search"
                        class="w-1/4 mr-4 bg-white border-none rounded-lg focus:ring-gray-400" placeholder="Buscar...">
                    <!-- Agrega tu componente de creación de Job Request aquí si es necesario -->
                </div>
            </div>
            <div class="relative mt-4 overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-sm text-center text-gray-100 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('id')">
                                ID
                                @if ($sort == 'id')
                                    @if ($direction == 'asc')
                                        <i class="ml-2 fa-solid fa-arrow-up-z-a"></i>
                                    @else
                                        <i class="ml-2 fa-solid fa-arrow-down-z-a"></i>
                                    @endif
                                @else
                                    <i class="ml-2 fa-solid fa-sort"></i>
                                @endif
                            </th>

                            <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('description')">
                                Descripción
                                @if ($sort == 'description')
                                    @if ($direction == 'asc')
                                        <i class="ml-2 fa-solid fa-arrow-up-z-a"></i>
                                    @else
                                        <i class="ml-2 fa-solid fa-arrow-down-z-a"></i>
                                    @endif
                                @else
                                    <i class="ml-2 fa-solid fa-sort"></i>
                                @endif
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Locación
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Lugar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Herramientas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Imagen
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Dirección
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Estado
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jobRequests as $jobRequest)
                            <tr
                                class="text-center bg-white border-b text-md dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $jobRequest->id }}
                                </th>
                                <td class="px-6 py-4 dark:text-lg">{{ $jobRequest->description }}</td>
                                <td class="px-6 py-4">{{ $jobRequest->location }}</td>
                                <td class="px-6 py-4">{{ $jobRequest->place }}</td>
                                <td class="px-6 py-4">{{ $jobRequest->tools }}</td>
                                <td class="px-6 py-4"><a href="#">{{ $jobRequest->image }}</a></td>
                                <td class="px-6 py-4">{{ $jobRequest->date }}</td>
                                <td class="px-6 py-4">{{ $jobRequest->address }}</td>
                                <td class="px-6 py-4">{{ $jobRequest->status }}</td>
                                <td class="flex justify-around py-4 pl-2 pr-8">
                                    <div
                                        @if ($open) class="flex pointer-events-none opacity-20" @else class="flex" @endif>
                                        {{-- Agrega tus acciones para este Job Request --}}
                                        {{-- <livewire:job-requests.show-job-request :jobRequest="$jobRequest" :key="time() . $jobRequest->id" /> --}}
                                        {{-- <livewire:job-requests.edit-job-request :jobRequest="$jobRequest" :key="time() . $jobRequest->id" />
                                    <livewire:job-requests.delete-job-request :jobRequest="$jobRequest" :key="time() . $jobRequest->id" /> --}}
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <!-- No jobRequests message -->
                            <tr>
                                <td colspan="12" class="mt-64 text-5xl text-center dark:text-gray-200">No hay Job
                                    Requests
                                    disponibles</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="px-3 py-1">{{ $jobRequests->links() }}</div>
            </div>
        @else
            <!-- No jobRequests message -->
            <h1 class="mt-64 text-5xl text-center dark:text-gray-200">No hay Job Requests disponibles</h1>
        @endif
    </div>
