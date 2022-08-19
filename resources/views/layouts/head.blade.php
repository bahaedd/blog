<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AlienDev | @yield('title')</title>
    <meta name="keywords" content="@yield('meta_keywords','AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development')">
    <meta name="description" content="@yield('meta_description','AlienDev here you can improve your programming skills')">
    <link rel="canonical" href="{{url()->current()}}"/>
    <link rel="icon" href="{{URL('/images/alien.png')}}" type="image/x-icon"/>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Heebo', sans-serif;
        }
    </style>
    <livewire:styles />
</head>
