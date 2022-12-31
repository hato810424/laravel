<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- -->
        <title>@yield('title') - {{ config('app.name') }}</title>
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
    </head>
    <body id="body">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </body>
</html>