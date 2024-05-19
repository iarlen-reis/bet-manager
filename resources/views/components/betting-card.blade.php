@props([
    "bet",
])

<a
    wire:navigate
    href="/aposta/{{ $bet->id }}"
    class="flex flex-col gap-3 rounded bg-blue-400/10 px-2 py-3 shadow shadow-white/5 transition-opacity hover:opacity-85 xl:px-4"
>
    <div class="flex items-start justify-between">
        <div class="flex flex-col gap-1">
            <span class="line-clamp-1 text-sm md:text-lg xl:text-xl">
                {{ $bet->name }}
            </span>
            <p class="text-xs text-white/60 md:text-sm xl:text-lg">
                {{ date("d M, Y", strtotime($bet->created_at)) }}
            </p>
        </div>
        <div>
            <div
                {{
                    $attributes->class([
                        "h-2 w-2 animate-pulse rounded-full md:h-2.5 md:w-2.5",
                        "bg-green-400" => $bet->status === "green",
                        "bg-red-400" => $bet->status === "red",
                        "bg-blue-400" => $bet->status === "pedding",
                        "bg-white" => $bet->status === "void",
                    ])
                }}
                title="{{ $bet->status }}"
            ></div>
        </div>
    </div>
    <div
        class="flex items-center justify-between text-xs md:text-sm xl:text-base"
    >
        <span class="line-clamp-1">{{ $bet->market }}</span>
        <span class="line-clamp-1">
            {{ number_format($bet->odds, 2, ".", "") }}
        </span>
    </div>
    <div class="flex items-center justify-end">
        <span
            {{
                $attributes->class([
                    "text-xs md:text-sm xl:text-base",
                    "text-green-400" => $bet->status === "green",
                    "text-red-400" => $bet->status === "red",
                    "text-blue-400" => $bet->status === "pedding",
                    "text-white" => $bet->status === "void",
                ])
            }}
        >
            {{
                $bet->status === "red"
                    ? "-R$ " . number_format($bet->amount, 2, ",", ".")
                    : "R$ " . number_format($bet->result, 2, ",", ".")
            }}
        </span>
    </div>
</a>
