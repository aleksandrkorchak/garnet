<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Гостевая книга</title>
</head>
<body>
<div id="app">
    <div class="container">
        <h1 class="row justify-content-center mt-5">Гостевая книга</h1>
        <messages :messages="{{ $messages }}"></messages>
        <h2 class="row justify-content-center mt-5">Оставить сообщение</h2>

        @if($errors->any())
            <list-errors :errors='@json($errors->all())'></list-errors>
        @endif

        <guest-form class="mb-5"></guest-form>
    </div>
</div>
</body>
</html>
