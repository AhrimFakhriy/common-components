@props(['title' => null])

<fieldset>
    @isset ($title)
        <legend class="text-lg leading-snug font-medium mb-4">{{ $title }}</legend>
    @endisset

    <div {{ $attributes->merge(['class' => 'space-y-2']) }}>
        {{ $slot }}
    </div>
</fieldset>
