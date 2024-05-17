@props([
    "href",
    "title",
])

<ul class="flex items-center gap-2 mt-6">
    <li class="rounded-full bg-blue-400/10 p-1">
        <x-gmdi-chevron-left-o class="w-6 text-white" />
    </li>
    <li>
        <a href="{{ $href }}" class="text-lg" wire:navigate>
            {{ $title }}
        </a>
    </li>
</ul>
