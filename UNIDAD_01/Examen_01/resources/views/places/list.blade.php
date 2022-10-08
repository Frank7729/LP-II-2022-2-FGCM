<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Place</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td id="tabla1"> <b>N°</b></td>
                <td id="tabla1"> <b>Lugar</b> </td>
                <td id="tabla1"> <b>Dirección</b> </td>
            </tr>
            @foreach ($places as $item)
            <tr>
                <td id="tabla2">{{$item->id}}</td>
                <td id="tabla2">{{$item->name}}</td>
                <td id="tabla2">{{$item->address}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

