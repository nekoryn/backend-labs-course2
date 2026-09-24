<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $newsItem['name'] ?? 'Галерея' }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="h-full flex flex-col min-h-screen bg-base-100 text-base-content">
    <x-header></x-header>

    <main class="flex-1 container mx-auto px-4 py-8 flex flex-col items-center">
        <div class="bg-base-300 p-6 rounded-2xl shadow-lg border border-base-300/50 max-w-2xl w-full">
            @isset($newsItem)
                <div class="text-sm text-base-content/60 mb-2">{{ $newsItem['date'] }}</div>
                <h1 class="text-2xl font-bold mb-4">{{ $newsItem['name'] }}</h1>
                
                <img src="{{ asset($newsItem['full_image']) }}" alt="{{ $newsItem['name'] }}" class="w-full h-auto rounded-xl shadow-md mb-6 object-cover">
                
                <p class="text-base-content/80 mb-6 leading-relaxed">{{ $newsItem['desc'] }}</p>
            @else
                <p class="text-error mb-4">Статья не найдена.</p>
            @endisset

            <a href="/" class="btn btn-primary btn-sm sm:btn-md">← На главную</a>
        </div>
    </main>

    <x-footer></x-footer>
</body>
</html>