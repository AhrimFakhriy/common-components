@props([
    'required' => false,
    'labelClass' => null,
    'label' => null,
    'for' => null,
])

@php
    $labelClasses = 'sm:w-1/2 lg:w-1/3 sm:text-right mt-2';

    if ($label && !is_string($label)) {
        $labelClasses .= $label->attributes->only('class');
    }

    $labelClasses .= ' ' . $labelClass;
@endphp

<div {{ $attributes->merge(['class' => 'w-full sm:flex sm:space-x-4 space-y-2 sm:space-y-0']) }}>
    @isset ($label)
        <x-cc::label :$for :$required :class="$labelClasses">
            {{ $label }}
        </x-cc::label>
    @endif

    <div class="w-full">
        {{ $slot }}

        @isset($for)
            <x-cc::error-message :for="$for"/>
        @endif
    </div>
</div>
