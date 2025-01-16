<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan 2</title>
</head>
<body>
    hallo, nama saya <strong>{{$nama}}</strong>, nilai saya adalah <strong>{{$nilai}}</strong>
    @if ($nilai <= 60)
        (<b>A<<b>)
    @elseif ($nilai <= 40)
            (<b>B<b>)
    @elseif ($nilai <= 60)
            (<b>C<b>)
    @elseif ($nilai <= 80)
            (<b>lulus<b>)  
    @else
            (<b>E<b>)
    @endif
        
</body>
</html>