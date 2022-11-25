@props([ 'disabled' => false ])

<button @disabled($disabled) {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2 border border-transparent focus:border-primary-800 bg-primary-600 hover:bg-primary-700 active:bg-primary-900 rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-0 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
