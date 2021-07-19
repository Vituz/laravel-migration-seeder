<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: calc(100% / 4 - 2rem);
            margin: 1rem;
            border: 1px solid black;
        }

        .card img {
            width: 100%;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="content">

        @foreach($packs as $pack)
        <div class="card">
            <img src="{{$pack->image}}" alt="">
            <h2>{{$pack->name}}</h2>
            <h3>Location: {{$pack->city}}</h3>
            <p>{{$pack->description}}</p>
            <h3>Departure: {{$pack->date}}</h3>
            <h3>Price: <span>{{$pack->price}}</span></h3>
        </div>
        @endforeach
    </div>
</body>

</html>