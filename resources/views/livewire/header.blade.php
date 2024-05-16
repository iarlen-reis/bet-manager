<header
    class="container relative mx-auto flex items-center justify-between p-3 py-4"
>
    <a wire:navigate href="/" class="text-2xl">
        <img
            src="/images/logo.png"
            alt="Logo do site Bet manager"
            class="w-[90px] transition-opacity hover:opacity-85 md:w-[120px]"
        />
    </a>
    <nav>
        <ul id="mobile" class="hidden items-center gap-4 md:flex">
            @auth
                <li>
                    <a
                        href="/config"
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        Configurações
                    </a>
                </li>
                <li>
                    <a
                        href="/config"
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        Todas apostas
                    </a>
                </li>
                <li>
                    <a
                        href="/config"
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        sair
                    </a>
                </li>
            @endauth

            @guest
                <li>
                    <a
                        href="/login"
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        Entrar
                    </a>
                </li>
                <li>
                    <a
                        href="/register"
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        Cadastrar
                    </a>
                </li>
            @endguest
        </ul>
        <div>
            <button class="md:hidden" id="button-mobile">
                <ion-icon name="menu-outline" size="large"></ion-icon>
            </button>
        </div>
    </nav>
</header>
