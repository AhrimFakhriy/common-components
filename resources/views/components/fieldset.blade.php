@props(['title' => null])

<fieldset {{ $attributes }}>
    @isset ($title)
        <legend class="mb-12 text-lg leading-snug text-slate-800 font-medium">{{ $title }}</legend>
    @endisset

    <div {{ $slot->attributes->merge(['class' => 'space-y-6']) }}>
        {{ $slot }}
    </div>
</fieldset>
