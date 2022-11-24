@props([
    'required' => false,
    'value',
])

<label {{ $attributes->class(['before:content-[\'*\'] before:text-red-400' => $required])->merge(['class' => 'block font-medium text-sm text-slate-700']) }}>
    {{ $value ?? $slot }}
</label>
