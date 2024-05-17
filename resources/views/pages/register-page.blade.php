<div class="flex w-full flex-col gap-8 lg:flex-row min-h-screen mt-12">
    <section class="hidden lg:block rounded-xl">
        <img
        src="/images/sports.jpg"
        alt="Imagem de alguns esportes"
        class="lg:w-[400px] xl:w-[530px] rounded-xl h-[600px]"
        >
    </section>
    <section class="wfull flex-1">
        <div class="mt-8">
            <img
                src="/images/logo.png"
                alt="Logo da página"
                class="mx-auto w-[120px] lg:w-[160px]"
            />
        </div>
        <form class="flex flex-col gap-4 mt-4" wire:submit.prevent="register">
        <x-text-field
                name="name"
                label="Nome"
                wire:model="name"
                placeholder="Nome"
            >
                <x-gmdi-person class="w-6 text-white/40" />
            </x-text-field>
            <x-text-field
                name="email"
                label="E-mail"
                wire:model="email"
                placeholder="E-mail"
            >
                <x-gmdi-email class="w-6 text-white/40" />
            </x-text-field>
            <x-text-field
                icon="lock-closed"
                name="password"
                label="Senha"
                wire:model="password"
                placeholder="Senha"
                type="password"
            >
                <x-gmdi-password class="w-6 text-white/40" />
            </x-text-field>
            <div class="flex items-center md:justify-end">
                <x-button title="Criar conta" />
            </div>
            <div class="flex flex-col items-center text-lg mt-10">
                <p>Já possui uma conta?</p>
                <a
                    wire:navigate
                    href="/login"
                    class="font-semibold text-blue-400"
                >
                    Entrar
                </a>
            </div>
        </form>
    </section>
</div>
