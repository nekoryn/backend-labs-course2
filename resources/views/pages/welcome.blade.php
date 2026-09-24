<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Привет</title>
    @vite(['resources/css/app.css', 'resources/js/typing_machine.js'])
</head>
<body class="h-full flex flex-col min-h-screen bg-base-100 text-base-content">
    <x-header></x-header>

    <main class="flex-1 items-center justify-center flex p-4">
        <div class="bg-base-300 p-6 sm:p-8 w-full max-w-md flex flex-col justify-between rounded-2xl shadow-lg border border-base-300/50">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold tracking-tight" id="typing-title"></h1>
            </div>
        
            <div class="flex-1 flex items-center py-4">
                <p class="text-base-content/70 text-sm sm:text-base leading-relaxed" id="typing-text"></p>
            </div>
        </div>
    </main>

    <x-footer></x-footer>
</body>
</html>