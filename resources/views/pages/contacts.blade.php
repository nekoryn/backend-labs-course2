<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты — Fresh News</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full flex flex-col min-h-screen bg-base-100 text-base-content">
    <x-header></x-header>

    <main class="flex-1 flex items-center justify-center p-4">
        <div class="bg-base-300 p-6 sm:p-8 w-full max-w-md rounded-2xl shadow-lg border border-base-300/50">
            <h1 class="text-2xl sm:text-3xl font-bold tracking-tight">Контакты</h1>
            <p class="text-base-content/70 text-sm sm:text-base mt-1 mb-6">Свяжитесь с нами любым удобным способом</p>
            
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 rounded-xl bg-base-100/50 border border-base-300/30">
                    <span class="font-medium flex items-center gap-2 text-sm sm:text-base">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        GitHub
                    </span>
                    <a href="https://github.com" target="_blank" class="px-3 sm:px-4 py-1.5 rounded-lg bg-base-300/50 hover:bg-primary hover:text-primary-content transition-all duration-200 text-xs sm:text-sm font-medium">
                        Открыть →
                    </a>
                </div>

                <div class="flex items-center justify-between p-3 rounded-xl bg-base-100/50 border border-base-300/30">
                    <span class="font-medium flex items-center gap-2 text-sm sm:text-base">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        Telegram
                    </span>
                    <a href="https://t.me" target="_blank" class="px-3 sm:px-4 py-1.5 rounded-lg bg-base-300/50 hover:bg-primary hover:text-primary-content transition-all duration-200 text-xs sm:text-sm font-medium">
                        Написать →
                    </a>
                </div>
            </div>
        </div>
    </main>

    <x-footer></x-footer>
</body>
</html>