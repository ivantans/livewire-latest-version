<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire with Tailwind</title>
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>
    @yield("container")
    <div class="h-96"></div>
    @livewireScripts
</body>
</html>