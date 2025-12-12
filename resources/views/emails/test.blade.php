<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{ $mailData['title'] }}</h1>

    <p>{{ $mailData['body'] }}</p>

    {!! $mailData['jimmy_text'] !!}

    <br>

    <img src="{{ $mailData['image1'] }}" alt="Image 1" style="max-width: 100%;">

    <br><br>

    <img src="{{ $mailData['image2'] }}" alt="Image 2" style="max-width: 30%;">
</body>

</html>