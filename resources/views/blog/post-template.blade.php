<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Ghostwind CSS : Tailwind Toolbox</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
    <!--Header-->
    <div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url({{URL('/images/1.webp')}}); height: 60vh; max-height:460px;">
        <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
            <!--Title-->
            <p class="text-white font-extrabold text-3xl md:text-5xl">
                Laravel Tips
            </p>
            <p class="text-xl md:text-2xl text-gray-500">Welcome to my Blog</p>
        </div>
    </div>
    <!--Container-->
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
        <div class="mx-0 sm:mx-6">
            <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
                <!--Posts Container-->
                <div class="flex flex-wrap justify-between p-12 -mx-6">
                    <!--1/3 col -->
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3">
                        <a href="/blog/post/">
                            <img class="rounded-t-lg" src="https://source.unsplash.com/collection/3106804/800x600" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="/blog/post/">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">title</h5>
                            </a>
                            <p class="mb-3 text-gray-400 text-sm font-semibold dark:text-gray-400">Lorem ipsum dolor sit amet.</p>
                            <a href="/blog/post/" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Read more  </a>
                        </div>
                         </div>
                    </div>
                    <!--1/3 col -->
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3">
                        <a href="/blog/post/">
                            <img class="rounded-t-lg" src="https://source.unsplash.com/collection/3106804/800x600" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="/blog/post/">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">title</h5>
                            </a>
                            <p class="mb-3 text-gray-400 text-sm font-semibold dark:text-gray-400">Lorem ipsum dolor sit amet.</p>
                            <a href="/blog/post/" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Read more  </a>
                        </div>
                         </div>
                    </div>
                    <!--1/3 col -->
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3">
                        <a href="/blog/post/">
                            <img class="rounded-t-lg" src="https://source.unsplash.com/collection/3106804/800x600" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="/blog/post/">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">title</h5>
                            </a>
                            <p class="mb-3 text-gray-400 text-sm font-semibold dark:text-gray-400">Lorem ipsum dolor sit amet.</p>
                            <a href="/blog/post/" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Read more  </a>
                        </div>
                         </div>
                    </div>
                </div>
                <!--/ Post Content-->
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@4"></script>
    <script>
    //Init tooltips
    tippy('.avatar')

    </script>
</body>

</html>
