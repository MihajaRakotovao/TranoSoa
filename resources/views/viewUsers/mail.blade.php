<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/mail.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="mail">
        <div class="mail-content">
            <h1>{{ $title }}  <a href="{{ route('offres', $id) }}">{{ $id->titre }}</a> à {{ $id->adresse }} </h1>
            <h3>{{ $content }}</h3>
            <div>
                <p>{{ $someso }}</p>
                <p> Tel: {{ $phone }}</p>
                <p>Email : {{ $mail }}</p>
            </div>
        </div>
    </div>

</body>
</html>
