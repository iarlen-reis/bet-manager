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
            <li>
                <x-betting-card status="red" />
            </li>
            <li>
                <x-betting-card status="green" />
            </li>
            <li>
                <x-betting-card />
            </li>
            <li>
                <x-betting-card status="void" />
            </li>
        </ul>
    </div>
</div>
