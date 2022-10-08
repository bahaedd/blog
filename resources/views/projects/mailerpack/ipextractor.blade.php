<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AlienDev | IP Address Extractor</title>

	<link rel="canonical" href="{{url()->current()}}"/>
    <link rel="icon" href="{{URL('/images/alien.png')}}" type="image/x-icon"/>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body class="border-b border-gray-200 dark:border-gray-600 bg-green-900 dark:bg-green-900">
<div class='grid grid-cols-12'>
        <div class="col-span-6 text-gray-300 font-sans bg-gray-900 min-h-screen pl-7 ">
            <div class="grid grid-rows-6 grid-flow-col min-h-screen items-center justify-items-start ">
                <div class="row-span-6 row-start-1 text-4xl">
                     <h4 class="text-green-500 text-center">IP Address Extractor</h4>                   
                    <div class="pt-12 pl-10 pr-10">
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Paste your text here..."></textarea>                           
                    </div>
                </div>
            </div>         
        </div>

        <div class="col-span-6 text-white font-sans font-bold bg-green-500 pt-12 pb-12 items-center justify-center">
            <div class="font-sans mx-auto w-128 max-w-lg overflow-hidden bg-gray-900 shadow-lg flex items-center justify-items-start bg-gray-900 bg-opacity-50 rounded-t">
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your IPs..."></textarea>
            </div>

        </div>    
</div>
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>
</html>
