<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan 3</title>
</head>
<body>
    <p>Hallo, nama saya <strong>{{$nama}}</strong>, hobi saya antara lain : </p>
    <ul>
        @foreach ($hobi as $val)
            <li>{{ $val }} </li>
        @endforeach
    </ul>
    <p>Berikut Skill yang Saya Miliki : </p>
    <ol>
        @for ($a = 0; $a < count($skill); $a++)
            <li>{{ $skill[$a] }} </li>
        @endfor
    </ol>    
</body>
</html>