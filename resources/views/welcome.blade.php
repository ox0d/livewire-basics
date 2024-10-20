<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livewire Basics</title>

    @vite('resources/js/app.js')
</head>

<body>
    <h1>Livewire Basics</h1>
    <h2 dir="rtl">سڵاو برایان.</h2>

    <div class="flex flex-col items-center justify-center border-gray-200 border rounded p-10 m-10 text-lg">
        <livewire:todos />
    </div>
</body>

</html>