@props([
    "title",
])

<button
    type="submit"
    class="w-full rounded bg-blue-400 py-3 text-center transition-opacity hover:opacity-85 md:w-[220px]"
>
    {{ $title }}
</button>
