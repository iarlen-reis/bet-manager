<div class="flex flex-col gap-8 pb-14">
    <x-navigation title="Todas apostas" href="/" />
    <div class="flex items-center justify-end">
        <div class="flex flex-col md:flex-row items-center justify-end gap-3 w-full">
            <fieldset class="group flex flex-col gap-1 w-full md:w-[200px]">
                <div
                    class="flex items-center gap-2 rounded border border-transparent bg-transparent px-3 py-2 group-hover:border-blue-400"
                >
                    <select
                        name="filter"
                        wire:model.live="filter"
                        class="w-full bg-transparent text-white outline-none"
                        id="filter"
                    >
                        <option class="text-zinc-950" value="">Filtrar</option>
                        <option class="text-zinc-950" value="red">red</option>
                        <option class="text-zinc-950" value="green">
                            green
                        </option>
                        <option class="text-zinc-950" value="void">void</option>
                        <option class="text-zinc-950" value="pedding">
                            pedding
                        </option>
                    </select>
                </div>
            </fieldset>

            <fieldset class="group flex flex-col gap-1 w-full md:w-[200px]">
                <div
                    class="flex items-center gap-2 rounded border border-transparent bg-transparent px-3 py-2 group-hover:border-blue-400"
                >
                    <select
                        name="days"
                        wire:model.live="days"
                        class="w-full bg-transparent text-white outline-none"
                        id="days"
                    >
                        <option class="text-zinc-950" value="">Data</option>
                        <option class="text-zinc-950" value="7">7 Dias</option>
                        <option class="text-zinc-950" value="14">14 Dias</option>
                        <option class="text-zinc-950" value="30">30 Dias</option>
                    </select>
                </div>
            </fieldset>
        </div>
    </div>

    <ul class="flex flex-col gap-4">
        @foreach ($this->bets as $bet)
            <x-betting-card :bet="$bet" />
        @endforeach
    </ul>
    <div class="flex items-center justify-end gap-3">
    {{ $this->bets->links() }}
    </div>
</div>
