<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная — Новости</title>
    @vite(['resources/css/app.css', 'resources/js/typing_machine.js'])
</head>
<body class="h-full flex flex-col min-h-screen bg-base-100 text-base-content">
    <x-header></x-header>

    <main class="flex-1 container mx-auto px-4 py-8">
        <div class="bg-base-300 p-6 sm:p-8 w-full max-w-md flex flex-col justify-between rounded-2xl shadow-lg border border-base-300/50 mx-auto mb-2">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold tracking-tight" id="typing-title"></h1>
            </div>
        
            <div class="flex-1 flex items-center py-4">
                <p class="text-base-content/70 text-sm sm:text-base leading-relaxed" id="typing-text"></p>
            </div>
        </div>

        <h2 class="text-3xl font-bold mb-6">Список статей</h2>

        <div class="overflow-x-auto bg-base-300 rounded-2xl p-4 shadow-lg border border-base-300/50">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>Превью</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Дата</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($news as $index => $item)
                        <tr>
                            <td>
                                <!-- Передаем индекс ($index) в роут галереи -->
                                <a href="{{ route('gallery', $index) }}">
                                    <img src="{{ asset($item['preview_image']) }}" alt="{{ $item['name'] }}" class="w-20 h-20 object-cover rounded-lg hover:opacity-80 transition-opacity">
                                </a>
                            </td>
                            <td class="font-bold">
                                <a href="{{ route('gallery', $index) }}" class="hover:text-primary transition-colors">
                                    {{ $item['name'] }}
                                </a>
                            </td>
                            <td class="text-base-content/70">{{ $item['shortDesc'] ?? 'Описание отсутствует' }}</td>
                            <td class="text-sm text-base-content/50">{{ $item['date'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">Статьи не найдены.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <x-footer></x-footer>
</body>
</html>