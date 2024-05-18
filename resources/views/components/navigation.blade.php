@props([
    "href",
    "title",
])

<a
    href="{{ $href }}"
    class="flex w-fit items-center gap-2 text-lg transition-opacity hover:opacity-85"
    wire:navigate
>
    <div class="rounded-full bg-blue-400/10 p-1">
        <x-gmdi-chevron-left-o class="w-6 text-white" />
    </div>
    {{ $title }}
</a>
