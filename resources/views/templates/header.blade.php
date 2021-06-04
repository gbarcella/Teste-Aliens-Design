<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teste - Aliens Design</title>

    <!-- Favicon !-->
    <link rel="shortcut icon" href="{{ url('/imgs/logo-aliens.png') }}" />

    <!-- Fonts !-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS !-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Own CSS !-->
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ url('/imgs/logo-aliens.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Teste - Aliens Design
            </a>
        </div>
    </nav>