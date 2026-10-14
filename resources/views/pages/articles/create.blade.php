<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать новость — Fresh News</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full flex flex-col min-h-screen bg-base-100 text-base-content">
    <x-header></x-header>

    <main class="flex-1 flex items-center justify-center p-4">
        <div class="bg-base-300 p-6 sm:p-8 w-full max-w-lg rounded-2xl shadow-lg border border-base-300/50">
            <h1 class="text-2xl font-bold tracking-tight mb-1">Новая статья</h1>
            <p class="text-base-content/70 text-sm mb-6">Заполните поля для публикации материала</p>
            
            @if ($errors->any())
                <div class="mb-6 p-4 rounded-xl bg-error/10 border border-error/20 text-error text-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('articles.store') }}" method="POST" class="space-y-4">
                @csrf
                
                <div>
                    <label for="title" class="block text-sm font-medium mb-1.5">Заголовок</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
                            class="w-full px-4 py-2.5 rounded-xl bg-base-100 border border-base-300/50 focus:outline-none focus:ring-2 focus:ring-primary text-sm">
                </div>
                
                <div>
                    <label for="content" class="block text-sm font-medium mb-1.5">Текст статьи</label>
                    <textarea id="content" name="content" rows="5" required
                                class="w-full px-4 py-2.5 rounded-xl bg-base-100 border border-base-300/50 focus:outline-none focus:ring-2 focus:ring-primary text-sm">{{ old('content') }}</textarea>
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', true) ? 'checked' : '' }}
                            class="rounded border-base-300 text-primary focus:ring-primary w-4 h-4">
                    <label for="is_published" class="text-sm font-medium">Опубликовать сразу</label>
                </div>
                
                <div class="pt-2 flex gap-3">
                    <button type="submit" class="flex-1 py-2.5 px-4 rounded-xl bg-primary text-primary-content hover:opacity-90 font-medium text-sm transition-all shadow-md">
                        Сохранить
                    </button>
                    <a href="{{ route('articles.index') }}" class="py-2.5 px-4 rounded-xl bg-base-100 hover:bg-base-100/80 font-medium text-sm text-center transition-all">
                        Отмена
                    </a>
                </div>
            </form>
        </div>
    </main>

    <x-footer></x-footer>
</body>
</html>