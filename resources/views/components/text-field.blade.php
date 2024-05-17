@props([
    "name",
    "label",
])

<fieldset class="w-full group flex flex-col gap-1">
    <label for="{{ $name }}" class="text-white/90">{{ $label }}</label>
    <div
        class="flex items-center gap-2 rounded border border-transparent bg-blue-400/10 px-3 py-4 group-hover:border-blue-400"
    >
        {{ $slot }}
        <input
            name="{{ $name }}"
            id="{{ $name }}"
            autocomplete="off"
            class="w-full bg-transparent outline-none placeholder:text-sm placeholder:text-white/40"
            {{ $attributes }}
        />
    </div>
    <p class="mt-1 text-xs text-red-400">
        @error($name)
            {{ $message }}
        @enderror
    </p>
</fieldset>
