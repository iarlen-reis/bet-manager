<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite("resources/css/app.css")
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"
            rel="stylesheet"
        />
        <title>{{ $title ?? "Page Title" }}</title>
    </head>

    <body>
        <livewire:header />
        <main class="container mx-auto px-3">
            {{ $slot }}
        </main>
    </body>
</html>
