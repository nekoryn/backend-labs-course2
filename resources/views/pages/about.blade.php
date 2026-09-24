<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    @vite('resources/css/app.css')
</head>

<body class="h-full flex flex-col min-h-screen">
    <x-header></x-header>

    <!-- Добавили p-4 для отступов на мобилках -->
    <main class="flex-1 flex items-center justify-center p-4">
        <!-- Заменили w-fit на w-full max-w-2xl для адаптивности -->
        <div class="bg-base-300 rounded-xl p-6 sm:p-8 w-full max-w-2xl shadow-lg">
            <h1 class="text-2xl sm:text-3xl font-bold mb-4">О нас</h1>
            <p class="text-base sm:text-lg leading-relaxed">
                Fresh News — ваш надежный источник актуальных и проверенных новостей из мира технологий,
                науки, культуры и бизнеса.
            </p>
            <p class="text-base sm:text-lg leading-relaxed mt-4">
                Мы собираем для вас только самую свежую информацию, события и аналитику каждый день, чтобы вы всегда
                были в курсе происходящего. Быстро, просто и без лишней воды.
            </p>
        </div>
    </main>

    <x-footer></x-footer>
</body>

</html>