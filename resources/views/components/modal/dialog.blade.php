@props([
    'header' => null,
    'footer' => null,
])

<x-cc::modal {{ $attributes->except(['class']) }}>
    <div {{ $attributes->only('class')->merge(['class' => 'flex flex-col divide-y']) }}>
        @isset($header)
            <div {{ $header->attributes->merge(['class' => 'px-6 py-4 text-lg font-bold']) }}>
                {{ $header }}
            </div>
        @endisset

        <div  {{ $content->attributes->merge(['class' => 'px-6 py-4']) }}>
            {{ $content }}
        </div>

        @isset($footer)
            <div {{ $footer->attributes->merge(['class' => 'flex flex-row justify-end px-6 py-4 text-right']) }}>
                {{ $footer }}
            </div>
        @endisset
    </div>
</x-cc::modal>
