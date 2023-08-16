<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICIA</title>
</head>
<body>
    <div style="background: #f1f1f1; width: 45%; height:150px">
        <h1>NOTICIA</h1>
        @foreach ($eventos as $e)
            <p><b>ID:</b> {{ $e['id'] }}</p>
            <p><b>TICKET:</b> {{ $e['tichet_numero'] }}</p>
            <p><b>DESCRIPCION:</b> {{ $e['descripcion'] }}</p>
            <p><b>---------------------</b></p>
        @endforeach
    </div>
</body>
</html>
