<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Font Awsome  ( https://saruwakakun.com/html-css/basic/font-awesome ) -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- flatpickr ( https://deep-blog.jp/engineer/12729/ ) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    <div class="container">
        @yield('content')
        <div class="footer">created by 'koshinoyudai@team-lab.com'</div>
    </div>

    <!-- flatpickr scriptタグ | head内だと動かないのでこっちへ連れてきた -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
    <script>
        flatpickr("#flatpickr", {
            locale: "ja"
        });

    </script>
</body>

</html>
