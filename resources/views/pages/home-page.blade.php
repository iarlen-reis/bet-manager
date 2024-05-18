<div class="flex flex-col gap-7 pb-12">
    <x-betting-metrics />
    <a
        wire:navigate
        href="/adicionar-aposta"
        class="flex items-center justify-end xl:hidden"
    >
        <x-button title="Adicionar apostas" />
    </a>
    @if (count($this->bets) > 0)
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
                    <x-betting-card :bet="$bet" />
                @endforeach
            </ul>
        </div>
    @endif

    @if (count($this->bets) <= 0)
        <div class="flex flex-col gap-2 items-center justify-center mt-6">
            <img
                src="/images/manager.png"
                alt="Imagem de uma mulher gerenciando suas despesas."
                class="max-w-[200px] lg:max-w-[300px] w-full"
            />
            <h1 class="text-2xl border-b pb-1 border-blue-400 text-center">Nenhuma aposta encontrada</h1>
        </div>
    @endif
</div>
