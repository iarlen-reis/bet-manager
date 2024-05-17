@script
    <script>
        const ul = document.querySelector('#mobile');
        const buttonMobile = document.querySelector('#button-mobile');
        const linksNavigation = document.querySelectorAll('.links-navigation');

        buttonMobile.addEventListener('click', () => {
            ul.classList.toggle('open');
        });

        linksNavigation.forEach((link) => {
            if (window.innerWidth < 768) {
                link.addEventListener('click', () => {
                    ul.classList.remove('open');
                });
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                ul.classList.remove('open');
            }
        });
    </script>
@endscript

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
                        wire:navigate
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        Configurações
                    </a>
                </li>
                <li>
                    <a
                        href="/todas-apostas"
                        wire:navigate
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        Todas apostas
                    </a>
                </li>
                <li>
                    <button
                        wire:click="logout"
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        sair
                    </button>
                </li>
            @endauth

            @guest
                <li>
                    <a
                        href="/login"
                        wire:navigate
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        Entrar
                    </a>
                </li>
                <li>
                    <a
                        href="/register"
                        wire:navigate
                        class="links-navigation text-lg transition-opacity hover:opacity-85"
                    >
                        Cadastrar
                    </a>
                </li>
            @endguest
        </ul>
        <div>
            <button class="md:hidden" id="button-mobile">
                <x-gmdi-menu class="text-white w-8" />
            </button>
        </div>
    </nav>
</header>
