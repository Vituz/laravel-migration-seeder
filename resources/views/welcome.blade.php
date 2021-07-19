<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

    <div class="menu">
        <span class="open_menu"><i class="fas fa-chevron-right"></i></span>
        <ul>
            @foreach($menus as $menu)
            <li>
                <a href="{{$menu->href}}">{{$menu->title}}</a>
            </li>
            @endforeach
        </ul>
    </div>
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