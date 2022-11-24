@props([
    'required' => false,
    'for',
])

<label {{ $attributes->class(['before:content-[attr(before)] before:text-red-400' => $required])->merge(['class' => 'block font-medium text-sm text-slate-700', 'before' => '*']) }}>
    {{ $for ?? $slot }}
</label>
