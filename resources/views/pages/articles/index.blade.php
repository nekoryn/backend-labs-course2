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
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl sm:text-3xl font-bold tracking-tight">Список новостей</h1>
            <a href="{{ route('articles.create') }}" class="px-4 py-2 rounded-xl bg-primary text-primary-content hover:opacity-90 font-medium text-sm transition-all shadow-md">
                + Добавить новость
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 rounded-xl bg-success/10 border border-success/25 text-success text-sm">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="space-y-4">
            @forelse ($articles as $article)
                <div class="bg-base-300 p-5 rounded-2xl shadow-lg border border-base-300/50 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start gap-4 mb-2">
                            <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                            <span class="text-xs px-2.5 py-1 rounded-lg {{ $article->is_published ? 'bg-success/20 text-success' : 'bg-warning/20 text-warning' }}">
                                {{ $article->is_published ? 'Опубликовано' : 'Черновик' }}
                            </span>
                        </div>
                        <p class="text-base-content/80 text-sm sm:text-base mb-4 line-clamp-2">{{ $article->content }}</p>
                    </div>

                    <div class="flex justify-between items-center pt-3 border-t border-base-content/10">
                        <span class="text-xs text-base-content/50">{{ $article->created_at->format('d.m.Y H:i') }}</span>
                        
                        <div class="flex items-center gap-2">
                            <a href="{{ route('articles.edit', $article) }}" class="px-3 py-1 rounded-lg bg-base-100/70 hover:bg-base-100 text-xs font-medium transition-all">
                                Редактировать
                            </a>
                            <form action="{{ route('articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Точно удалить эту статью?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 rounded-lg bg-error/10 hover:bg-error hover:text-error-content text-error text-xs font-medium transition-all">
                                    Удалить
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-base-content/70 text-center py-8">Новостей пока нет.</p>
            @endforelse
        </div>

        {{-- Пагинация (стандартные стили Tailwind пагинации Laravel) --}}
        <div class="mt-6">
            {{ $articles->links() }}
        </div>
    </main>

    <x-footer></x-footer>
</body>
</html>