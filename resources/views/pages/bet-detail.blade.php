<div class="flex flex-col gap-4 pb-12 md:gap-6">
    <x-navigation title="Detalhes da aposta" href="/" />
    <div class="mt-4 flex flex-col gap-1">
        <h1 class="line-clamp-1 text-xl md:text-2xl lg:text-3xl">
            {{ $this->bet->name }}
        </h1>
        <span class="text-zinc-400 md:text-lg">
            {{ date("d M, Y", strtotime($this->bet->created_at)) }}
        </span>
    </div>
    <div class="flex flex-col gap-1">
        <h2 class="text-lg md:text-xl lg:text-2xl">Mercado selecionado</h2>
        <span class="text-zinc-400 md:text-lg lg:text-xl">
            {{ $this->bet->market }}
        </span>
    </div>
    <div class="flex flex-col gap-1">
        <h2 class="text-lg md:text-xl lg:text-2xl">Esporte selecionado</h2>
        <span class="capitalize text-zinc-400 md:text-lg lg:text-xl">
            {{ $this->bet->sport }}
        </span>
    </div>
    <div class="flex items-start gap-4">
        <div class="flex flex-col gap-1">
            <h2 class="text-lg md:text-xl lg:text-2xl">Cotação (Odds)</h2>
            <span class="text-zinc-400 md:text-lg lg:text-xl">
                {{ $this->bet->odds }}
            </span>
        </div>
        |
        <div class="flex flex-col gap-1">
            <h2 class="text-lg md:text-xl lg:text-2xl">Valor apostado</h2>
            <span class="text-zinc-400 md:text-lg lg:text-xl">
                R$ {{ number_format($this->bet->amount, 2, ",", ".") }}
            </span>
        </div>
    </div>
    <div class="flex items-start gap-4">
        <div class="flex flex-col gap-1">
            <h2 class="text-lg md:text-xl lg:text-2xl">Resultado</h2>
            <span class="text-zinc-400 md:text-lg lg:text-xl">
                R$ {{ number_format($this->bet->result, 2, ",", ".") }}
            </span>
        </div>
        |
        <div class="flex flex-col gap-1">
            <h2 class="text-lg md:text-xl lg:text-2xl">Status</h2>
            <span class="text-zinc-400 md:text-lg lg:text-xl">
                {{ $this->bet->status }}
            </span>
        </div>
    </div>
    @if ($this->bet->description)
        <div class="flex flex-col gap-1">
            <h2 class="text-lg md:text-xl lg:text-2xl">Descricão</h2>
            <p class="text-zinc-400 md:max-w-[700px] md:text-lg lg:text-xl">
                {{ $this->bet->description }}
            </p>
        </div>
    @endif

    <div class="flex items-center gap-4">
        <a
            href="/aposta/editar/{{ $this->bet->id }}"
            class="rounded border border-white/60 p-3 transition-all hover:bg-blue-400"
        >
            Editar aposta
        </a>
        <button
            wire:click="delete"
            wire:confirm="Deseja excluir esta aposta?"
            class="rounded border border-red-400/60 p-3 transition-all hover:bg-red-400"
        >
            Excluir aposta
        </button>
    </div>
</div>
