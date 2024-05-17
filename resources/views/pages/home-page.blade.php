<div class="mt-4 flex flex-col gap-7 pb-12">
    <x-betting-metrics />
    <div class="flex items-center justify-end xl:hidden">
        <a wire:navigate href="/adicionar-aposta">
            <x-button title="Adicionar apostas" />
        </a>
    </div>
    <div class="flex flex-col gap-5">
        <div class="flex items-center justify-between">
            <h2 class="text-lg md:text-xl">Últimas apostas</h2>
            <a
                wire:navigate
                href="/todas-apostas"
                class="text-sm text-white/40 transition-opacity hover:opacity-85 md:text-lg"
            >
                Ver mais
            </a>
        </div>
        <ul class="flex flex-col gap-4">
            @foreach ($this->bets as $bet)
                <x-betting-card
                    name="{{ $bet->name }}"
                    value="{{ $bet->value }}"
                    status="{{ $bet->status }}"
                    created_at="{{ $bet->created_at }}"
                    market="{{ $bet->market }}"
                    odds="{{ $bet->odds }}"
                />
            @endforeach
        </ul>
    </div>
</div>
