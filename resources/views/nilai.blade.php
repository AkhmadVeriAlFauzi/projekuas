@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segera Hadir</title>
    <style>
        body {
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
        }
        h1 {
            margin-top: 25%;
            font-size: 3em;
            color: #333;
            justify-content: center;
            text-align: center;
        }
        p {
            font-size: 1.2em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Website Sedang Dalam Perbaikan</h1>
        <p>Kami sedang melakukan perbaikan. Silakan kembali lagi nanti.</p>
    </div>
</body>
</html>

@endsection
