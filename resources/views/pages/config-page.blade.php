<div class="mx-auto flex w-full max-w-[768px] flex-col gap-3">
    <div class="text-center">
        <h1 class="line-clamp-1 text-2xl md:text-3xl">
            Olá,
            <span class="capitalize">{{ auth()->user()->name }}</span>
        </h1>
        <p class="text-zinc-400 md:text-lg">Faça o gerenciamento da sua conta</p>
    </div>
    <div class="flex items-center justify-center">
        @if ($photo)
            <img
                alt="Imagem do perfil do usuário {{ $name }}"
                src="{{ $photo }}"
                class="h-[150px] w-[150px] rounded-full"
            />
        @endif

        @if ($previewPhoto)
            <img
                alt="Imagem de preview"
                id="photo-preview"
                src="{{ $previewPhoto->temporaryUrl() }}"
                class="h-[150px] w-[150px] rounded-full"
            />
        @endif

        @if (! $photo && ! $previewPhoto)
            <fieldset
                class="flex h-[150px] w-[150px] cursor-pointer items-center justify-center rounded-full border border-white/40"
            >
                <label for="photo">
                    <x-gmdi-add-photo-alternate-r
                        class="w-12 cursor-pointer text-white/40"
                    />
                </label>
                <input
                    type="file"
                    id="photo"
                    class="hidden"
                    wire:model.live="previewPhoto"
                />
            </fieldset>
        @endif
    </div>
    <form class="flex flex-col gap-3" wire:submit.prevent="save">
        <x-text-field
            label="Nome"
            name="name"
            type="text"
            placeholder="Nome"
            wire:model="name"
        >
            <x-gmdi-person class="w-6 text-white/40" />
        </x-text-field>
        <x-text-field
            label="E-mail"
            name="email"
            type="text"
            placeholder="E-mail"
            wire:model="email"
            disabled
        >
            <x-gmdi-mail class="w-6 text-white/40" />
        </x-text-field>
        <div class="flex items-center md:justify-end">
            <x-button title="Salvar" />
        </div>
    </form>
</div>
