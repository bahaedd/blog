@extends('/blog/main')
@section('content')
<div class="container mx-auto flex flex-wrap py-3 mt-12 dark:bg-gray-800">
    <!-- quotes --->
    <div class="w-full bg-white mb-4 flex items-center justify-center dark:bg-gray-800">
        <div class="mb-4 mx-auto text-center">
            <div class="text-7xl text-green-600 leading-5 mb-3">”</div>
            <div class="font-medium max-w-xl text-xl text-gray-400">
                {{ \Illuminate\Foundation\Inspiring::quote() }}
            </div>
        </div>
    </div>
    <section class="w-full md:w-2/3 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal">
        @foreach ($s_post as $s_post)
        <article class="bg-white flex flex-col rounded-lg border border-gray-200 shadow-md my-4 dark:border-gray-700 dark:bg-gray-600">
            <a href="/blog/post/{{ $s_post->slug }}" class="w-full hover:opacity-75 rounded">
                <img src="{{Voyager::image( $s_post->image )}}">
            </a>
            <div class="bg-white flex flex-col justify-start text-gray-650 p-6 dark:bg-gray-800">
                <p class="text-bold text-md pb-3 ">
                    <span class="bg-blue-100 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-gray-800">
                        <ion-icon name="bookmark-outline" class="mr-2"></ion-icon> {{ $s_post->title }}
                    </span>
                </p>
                <a href="/blog/post/{{ $s_post->slug }}" class="text-3xl font-bold text-gray-400 hover:text-gray-200 pb-4">{{ $s_post->title }}</a>
                <p class="text-sm pb-3 font-semibold  hover:text-gray-200">
                    By bahaeddine , Published on {{ $s_post->created_at }}
                </p>
                <p class="pb-6 text-gray-400 text-sm font-semibold">{{ $s_post->excerpt }}</p>
                <a class="mx-auto focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" href="/blog/post/{{ $s_post->slug }}">
                    <span class="">Read More</span>
                </a>
            </div>
        </article>
        @endforeach
    </section>
    @include('/blog/layouts.sidebar', ['recent_posts, categories' => $recent_posts, $categories, $tags])
    <!-- latest posts -->
    <div class="w-full md:w-3/3 flex flex-wrap px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal mt-3">
        <h2 class="my-4 text-xl font-bold text-white rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400">LATEST POSTS</h2>
        <div class="flex flex-wrap">
            @foreach ($latest_posts as $post)
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-4 dark:bg-gray-800">
                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3">
                    <a href="/blog/post/{{ $post->slug }}">
                        <img class="rounded-t-lg" src="{{Voyager::image( $post->image )}}" alt="latest post" />
                    </a>
                    <div class="p-5">
                        <a href="/blog/post/{{ $post->slug }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                        </a>
                        <p class="mb-3 text-gray-400 text-sm font-semibold dark:text-gray-400">{{ Str::substr($post->excerpt, 0, 40)}}...</p>
                        <a href="/blog/post/{{ $post->slug }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Read more </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container mx-auto py-3 mt-12 dark:bg-gray-800">
        <h2 class="my-2 ml-6 text-xl font-bold text-white rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400">LARAVEL POSTS</h2>
        <div class="flex flex-wrap px-4 m-b-3 md:px-6">
            @foreach ($laravel_posts as $post)
            <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-4 dark:bg-gray-800 mt-4 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3">
                    <a href="/blog/post/{{ $post->slug }}">
                        <img class="rounded-t-lg" src="{{Voyager::image( $post->image )}}" alt="post image" />
                    </a>
                    <div class="p-5">
                        <a href="/blog/post/{{ $post->slug }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                        </a>
                        <p class="mb-3 text-gray-400 text-sm font-semibold dark:text-gray-400">{{ Str::substr($post->excerpt, 0, 30)}}...</p>
                        <a href="/blog/post/{{ $post->slug }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Read more </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
