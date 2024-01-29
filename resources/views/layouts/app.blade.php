<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire with Tailwind</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body class="font-inter scroll-smooth">
    <div class="flex">
    @include("layouts.side-navigation")
    @yield("container")
    </div>
    <div class="h-96"></div>
    @livewireScripts
</body>
</html>