<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>TaskList</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {{-- 「CSRF対策」のために必要となる記述 --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- Tailwind CSSやdaisyUIのファイルを読み込み --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        <div class="container mx-auto">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            {{-- 継承先@section('content') --}}
            @yield('content')
        </div>

    </body>
</html>