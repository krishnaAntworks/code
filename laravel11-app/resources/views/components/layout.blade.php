<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <x-nav-layout href="/" >Home</x-nav-layout>
    <x-nav-layout href="/about">about</x-nav-layout>
    <x-nav-layout href="/contact" type="button">contact</x-nav-layout>
    {{ $slot }}
</body>
</html>