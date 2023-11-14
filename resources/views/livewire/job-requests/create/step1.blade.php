<div>
    <label>
        <p class="mb-12">En qué te podemos <br> ayudar?</p>
    </label>
    <x-input class="mb-12 text-2xl bg-gray-700 h-28 shadow-black" type="text" wire:model="description" />
    <x-input-error for="description" />

    <div>
        @if ($descriptionEntered)
            <label for="category">
                <p class="mb-12">¿Dentro de qué categoría entra tu problema?</p>
            </label>
            <select id="category" wire:model="selectedCategory" class="mb-12 text-2xl bg-gray-700 rounded-lg">
                <option value="">Selecciona una categoría</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        @endif


        @if ($categoryEntered)
            <label for="skill"></label>
            <select id="skill" wire:model="selectedSkill" class="mb-12 text-2xl bg-gray-700 rounded-lg">
                <option value="">Selecciona una habilidad</option>
                @if ($skills)
                    @foreach ($skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach
                @endif
            </select>
        @endif

    </div>
</div>
