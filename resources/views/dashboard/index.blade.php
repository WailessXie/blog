<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} Dashboard</title>

    <link rel="shortcut icon" href="{{ config('blog.default_icon') }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <style>
        [v-cloak] { display: none; }
    </style>

    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        }

        window.User = {!! Auth::user() !!}

        window.Permissions = {!! Auth::user()->getAllPermissions()->pluck('name') !!}

        window.isSuperAdmin = {!! Auth::user()->isSuperAdmin() !!}

        window.Language = "{{ config('app.locale') }}"
    </script>
</head>
<body>
    <div id="app"></div>

    <script src="{{ mix('js/app.js') }}"></script>

    @if(config('blog.google.open'))
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('blog.google.id') }}" +></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ config('blog.google.id') }}');
        </script>
    @endif
</body>
</html>
