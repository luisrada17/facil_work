@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-xl text-red-400 dark:text-red-400']) }}>{{ $message }}</p>
@enderror
