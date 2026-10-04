<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация — Fresh News</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full flex flex-col min-h-screen bg-base-100 text-base-content">
    <x-header></x-header>

    <main class="flex-1 flex items-center justify-center p-4">
        <div class="bg-base-300 p-6 sm:p-8 w-full max-w-md rounded-2xl shadow-lg border border-base-300/50">
            <h1 class="text-2xl sm:text-3xl font-bold tracking-tight">Регистрация</h1>
            <p class="text-base-content/70 text-sm sm:text-base mt-1 mb-6">Создайте новый аккаунт в системе</p>
            
            {{-- Вывод ошибок валидации --}}
            @if ($errors->any())
                <div class="mb-6 p-4 rounded-xl bg-error/10 border border-error/20 text-error text-sm">
                    <p class="font-semibold mb-1">Пожалуйста, исправьте ошибки:</p>
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('signin.submit') }}" method="POST" class="space-y-4">
                @csrf
                
                <div>
                    <label for="name" class="block text-sm font-medium mb-1.5">Имя</label>
                    <input type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}" 
                            required
                            class="w-full px-4 py-2.5 rounded-xl bg-base-100 border border-base-300/50 focus:outline-none focus:ring-2 focus:ring-primary text-sm transition-all duration-200">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium mb-1.5">Email</label>
                    <input type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required
                            class="w-full px-4 py-2.5 rounded-xl bg-base-100 border border-base-300/50 focus:outline-none focus:ring-2 focus:ring-primary text-sm transition-all duration-200">
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium mb-1.5">Пароль</label>
                    <input type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="w-full px-4 py-2.5 rounded-xl bg-base-100 border border-base-300/50 focus:outline-none focus:ring-2 focus:ring-primary text-sm transition-all duration-200">
                </div>
                
                <div class="pt-2">
                    <button type="submit" class="w-full py-2.5 px-4 rounded-xl bg-primary text-primary-content hover:opacity-90 font-medium text-sm transition-all duration-200 shadow-md">
                        Зарегистрироваться
                    </button>
                </div>
            </form>
        </div>
    </main>

    <x-footer></x-footer>
</body>
</html>