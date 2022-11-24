@props(['for'])

<div>
    @if (str_contains($for, '*'))
        @foreach ($errors->get($for) as $key => $messages)
            <div class="invalid-feedback mt-1 text-xs text-rose-500">
                @error($key)
                    <div class="mt-1 text-xs text-rose-500">{!! $message !!}</div>
                @enderror
            </div>
        @endforeach
    @else
        @error($for)
            <div class="invalid-feedback mt-1 text-xs text-rose-500">{!! $slot->isNotEmpty() ? $slot : $message !!}</div>
        @enderror
    @endif
</div>
