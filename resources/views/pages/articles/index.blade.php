<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости — Fresh News</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full flex flex-col min-h-screen bg-base-100 text-base-content">
    <x-header></x-header>

    <main class="flex-1 p-4 sm:p-8 max-w-4xl mx-auto w-full">
        <h1 class="text-2xl sm:text-3xl font-bold tracking-tight mb-6">Список новостей</h1>
        
        <div class="space-y-4">
            @forelse ($articles as $article)
                <div class="bg-base-300 p-5 rounded-2xl shadow-lg border border-base-300/50">
                    <h2 class="text-xl font-semibold mb-2">{{ $article->title }}</h2>
                    <p class="text-base-content/80 text-sm sm:text-base mb-4">{{ $article->content }}</p>
                    <span class="text-xs text-base-content/50">Опубликовано: {{ $article->created_at->format('d.m.Y H:i') }}</span>
                </div>
            @empty
                <p class="text-base-content/70">Новостей пока нет.</p>
            @endforelse
        </div>
    </main>

    <x-footer></x-footer>
</body>
</html>