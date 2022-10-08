<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AlienDev | MailerPack</title>

	<link rel="canonical" href="{{url()->current()}}"/>
    <link rel="icon" href="{{URL('/images/alien.png')}}" type="image/x-icon"/>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body class="border-b border-gray-200 dark:border-gray-600 bg-green-900 dark:bg-green-900">
<div class="px-16 mx-auto py-16 md:py-20 bg-green-900 dark:bg-green-900" id="services">
    <h2 class="my-4 text-4xl text-center font-semibold text-green 700 bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400">MailerPack</h2>
    <a href="{{ route('ip-extractor') }}">
    <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
      <div class="group rounded px-8 py-12 shadow bg-gray-800">
        <div class="mx-auto h-48 w-24 text-center xl:h-28 xl:w-28">
          <ion-icon name="at-circle-sharp" size="large"></ion-icon>
        </div>
        <div class="text-center">
          <h3 class="pt-2 text-lg font-semibold text-primary group-hover:text-yellow lg:text-xl">IP Address Extractor</h3>
        </div>
      </div>
      </a>
      <div class="group rounded px-8 py-12 shadow bg-gray-800">
        <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
            <ion-icon name="globe-sharp" size="large"></ion-icon>
        </div>
        <div class="text-center">
          <h3 class="pt-2 text-lg font-semibold text-primary group-hover:text-yellow lg:text-xl">DNS Lookup</h3>
        </div>
      </div> 
      <div class="group rounded px-8 py-12 shadow bg-gray-800">
        <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
            <ion-icon name="list-sharp" size="large"></ion-icon>
        </div>
        <div class="text-center">
          <h3 class="pt-2 text-lg font-semibold text-primary group-hover:text-yellow lg:text-xl">URL Lookup</h3>
        </div>
      </div>
    </div>
</div>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>
</html>