@props(['title' => null])

<fieldset>
    @isset ($title)
        <legend class="leading-snug font-medium">{{ $title }}</legend>
    @endisset

    <div {{ $attributes->merge(['class' => 'mt-4 space-y-2']) }}>
        {{ $slot }}
    </div>
</fieldset>
