<div
    class="flex items-center justify-between rounded bg-blue-400/10 px-2 py-3 xl:px-4"
>
    <div class="flex items-center gap-3">
        <div class="w-fit rounded bg-blue-400/55 p-2 md:p-4">
            <x-gmdi-task-alt class="w-6 text-blue-400 md:w-8" />
        </div>
        <div class="flex flex-col">
            <span class="text-sm font-semibold md:text-xl">
                {{ $this->allBetsCount }}
            </span>
            <span class="text-xs md:text-lg">Total</span>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <div class="w-fit rounded bg-blue-400/55 p-2 md:p-4">
            <x-gmdi-calendar-month class="w-6 text-blue-400 md:w-8" />
        </div>
        <div class="flex flex-col">
            <span class="text-sm font-semibold md:text-xl">
                {{ $this->allBetTodayCount }}
            </span>
            <span class="text-xs md:text-lg">Hoje</span>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <div class="w-fit rounded bg-blue-400/55 p-2 md:p-4">
            <x-gmdi-savings class="w-6 text-blue-400 md:w-8" />
        </div>
        <div class="flex flex-col">
            <span class="text-sm font-semibold md:text-xl">
                R$ {{ $this->allMoneyBetting }}
            </span>
            <span class="text-xs md:text-lg">dinheiro</span>
        </div>
    </div>
    <div class="hidden xl:block">
        <a wire:navigate href="/adicionar-aposta">
            <x-button title="Adicionar apostas" />
        </a>
    </div>
</div>
