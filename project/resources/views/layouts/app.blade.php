<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    {{-- ここは、画面に表示されません --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- ここから画面に表示されます。 --}}
    <header class="navbar">
        <div class="container-fluid">
          <h1 class="navbar-brand">{{ config('app.name') }}</h1>
        </div>
    </header>
    <div>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <p>© 2024 laravelチュートリアル</p>
    </footer>
    </div>
</body>
</html>