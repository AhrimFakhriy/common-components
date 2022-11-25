@props([
    'disabled' => false,
    'readonly' => false,
    'prefix' => null,
    'suffix' => null,
])

<div {{ $attributes->only(['class'])->merge(['class' => 'relative']) }}">
    <input
        @disabled($disabled)
        @readonly($readonly)
        {!! $attributes->except('class')->merge(['type' => 'text']) !!}
        class="{{ $inputClass ?? '' }} w-full rounded-md shadow-sm border-slate-200 hover:border-slate-300 focus:border-indigo-300 disabled:border-slate-200 placeholder-slate-400 hover:placeholder-slate-500 text-slate-600 disabled:text-slate-500 hover:text-slate-700 focus:ring-0 focus:outline-none disabled:bg-slate-50 cursor-pointer disabled:cursor-text"
    />

    @isset($prefix)
        <div class="absolute inset-0 right-auto flex items-center pointer-events-none">
            <span class="text-slate-400 font-medium px-3">{!! $prefix !!}</span>
        </div>
    @endisset

    @isset($suffix)
        <div class="absolute inset-0 left-auto flex items-center pointer-events-none">
            <span class="text-slate-400 font-medium px-3">{!! $suffix !!}</span>
        </div>
    @endisset
</div>
