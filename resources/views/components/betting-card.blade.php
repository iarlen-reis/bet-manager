@props([
    "name",
    "created_at",
    "market",
    "value",
    "status",
    "odds",
])

<div class="flex flex-col gap-3 rounded bg-blue-400/10 px-2 py-3 xl:px-4">
    <div class="flex items-start justify-between">
        <div class="flex flex-col gap-1">
            <span class="text-sm line-clamp-1 md:text-lg xl:text-xl">{{ $name }}</span>
            <p class="text-xs md:text-sm text-white/60 xl:text-lg">
                {{ date("d M, Y", strtotime($created_at)) }}
            </p>
        </div>
        <div>
            <div
                {{
                    $attributes->class([
                        "h-2 w-2 md:h-2.5 md:w-2.5 animate-pulse rounded-full",
                        "bg-green-400" => $status === "green",
                        "bg-red-400" => $status === "red",
                        "bg-blue-400" => $status === "pedding",
                        "bg-white" => $status === "void",
                    ])
                }}
                title="{{ $status }}"
            ></div>
        </div>
    </div>
    <div class="flex items-center justify-between text-xs md:text-sm xl:text-base">
        <span class="line-clamp-1">{{ $market }}</span>
        <span class="line-clamp-1">{{ $odds }}</span>
    </div>
    <div class="flex items-center justify-end">
        <span {{
                    $attributes->class([
                        "text-xs md:text-sm xl:text-base",
                        "text-green-400" => $status === "green",
                        "text-red-400" => $status === "red",
                        "text-blue-400" => $status === "pedding",
                        "text-white" => $status === "void",
                    ])
                }}>{{ $status === "red" ? "-R$ $value"  : $value }}</span>
    </div>
</div>
