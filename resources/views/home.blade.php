<!DOCTYPE html>
<html lang="es-ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-4xl mx-auto px-4">
        {{--<h1>Bienvenidos a la página principal</h1>--}}
        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <x-alert>
                <x-slop name="title">
                    Titulo de la Alerta
                </x-slo>
                Contenido de la alerta.
            </x-alert>
        </div>
    </div>
</body>

</html>
