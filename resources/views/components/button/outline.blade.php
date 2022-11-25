@props([ 'disabled' => false ])

<button  @disabled($disabled) {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2 border border-primary-600 hover:border-primary-700 active:border-primary-800 hover:bg-primary-50 focus:bg-primary-50 active:bg-primary-100 text-primary-600 hover:text-primary-700 rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-0 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
