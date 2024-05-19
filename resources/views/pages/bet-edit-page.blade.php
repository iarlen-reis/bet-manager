<div class="flex flex-col gap-8 pb-12">
    <x-navigation title="Editar {{ $name }}" href="/" />
    <form class="flex flex-col gap-4" wire:submit.prevent="update">
        <x-text-field
            name="name"
            label="Nome da aposta"
            placeholder="Nome da aposta"
            wire:model="name"
        >
            <x-gmdi-sell class="w-6 text-white/40" />
        </x-text-field>

        <div class="flex flex-col items-center gap-3 md:flex-row">
            <x-text-field
                name="market"
                label="Mercado selecionado"
                placeholder="Mercado selecionado"
                wire:model="market"
            >
                <x-gmdi-question-mark-o class="w-6 text-white/40" />
            </x-text-field>

            <div class="w-full md:w-[200px]">
                <fieldset class="group flex flex-col gap-1">
                    <label for="status" class="text-white/90">Status</label>
                    <div
                        class="flex items-center gap-2 rounded border border-transparent bg-blue-400/10 px-3 py-4 group-hover:border-blue-400"
                    >
                        <x-gmdi-query-stats-r class="w-6 text-white/40" />
                        <select
                            name="status"
                            wire:model="status"
                            class="w-full bg-transparent text-white/40"
                            id="{{ $name }}"
                        >
                            <option class="text-zinc-950" value="red">
                                red
                            </option>
                            <option class="text-zinc-950" value="green">
                                green
                            </option>
                            <option class="text-zinc-950" value="void">
                                void
                            </option>
                            <option class="text-zinc-950" value="pedding">
                                pedding
                            </option>
                        </select>
                    </div>
                    <p class="mt-1 text-xs text-red-400">
                        @error("status")
                            {{ $message }}
                        @enderror
                    </p>
                </fieldset>
            </div>
        </div>

        <div class="flex flex-col items-center gap-3 md:flex-row">
            <x-text-field
                name="amount"
                wire:model="amount"
                label="Valor da aposta"
                placeholder="Valor da aposta"
                type="number"
                min="0"
                step="0.01"
            >
                <x-gmdi-attach-money-o class="w-6 text-white/40" />
            </x-text-field>

            <div class="w-full md:w-[200px]">
                <x-text-field
                    name="odds"
                    wire:model="odds"
                    label="Odds"
                    type="number"
                    min="0"
                    step="0.01"
                    placeholder="Odds"
                >
                    <x-gmdi-swap-horiz class="w-6 text-white/40" />
                </x-text-field>
            </div>
        </div>

        <div class="flex flex-col gap-1">
            <label class="text-white/90">Esporte selecionado</label>
            <div class="flex items-center gap-3">
                <div class="flex flex-col gap-3">
                    <fieldset>
                        <input
                            type="radio"
                            id="futebol"
                            name="sport"
                            value="futebol"
                            wire:model="sport"
                            hidden
                        />
                        <label
                            for="futebol"
                            class="flex w-[170px] items-center justify-center gap-1 rounded bg-blue-400/10 p-3 xl:w-[220px]"
                        >
                            <x-gmdi-sports-soccer-o class="w-6 text-white/40" />
                            <span class="text-white/40">Futebol</span>
                        </label>
                    </fieldset>
                    <fieldset>
                        <input
                            type="radio"
                            id="tenis"
                            name="sport"
                            value="tenis"
                            wire:model="sport"
                            hidden
                        />
                        <label
                            for="tenis"
                            class="flex w-[170px] items-center justify-center gap-1 rounded bg-blue-400/10 p-3 xl:w-[220px]"
                        >
                            <x-gmdi-sports-tennis-o class="w-6 text-white/40" />
                            <span class="text-white/40">Tênis</span>
                        </label>
                    </fieldset>
                </div>
                <div class="flex flex-col gap-3">
                    <fieldset>
                        <input
                            type="radio"
                            id="basquete"
                            name="sport"
                            value="basquete"
                            wire:model="sport"
                            hidden
                        />
                        <label
                            for="basquete"
                            class="flex w-[170px] items-center justify-center gap-1 rounded bg-blue-400/10 p-3 xl:w-[220px]"
                        >
                            <x-gmdi-sports-basketball-r
                                class="w-6 text-white/40"
                            />
                            <span class="text-white/40">Basquete</span>
                        </label>
                    </fieldset>
                    <fieldset>
                        <input
                            type="radio"
                            id="football"
                            name="sport"
                            value="football"
                            wire:model="sport"
                            hidden
                        />
                        <label
                            for="football"
                            class="flex w-[170px] items-center justify-center gap-1 rounded bg-blue-400/10 p-3 xl:w-[220px]"
                        >
                            <x-gmdi-sports-football-r
                                class="w-6 text-white/40"
                            />
                            <span class="text-white/40">Americano</span>
                        </label>
                    </fieldset>
                </div>
            </div>
            <p class="mt-1 text-xs text-red-400">
                @error("sport")
                    {{ $message }}
                @enderror
            </p>
        </div>

        <x-text-area-field
            name="description"
            wire:model="description"
            label="Descrição da aposta"
            placeholder="Descrição da aposta"
        />

        <div class="flex items-center justify-end">
            <x-button title="Editar" />
        </div>
    </form>
</div>
