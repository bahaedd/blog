@extends('/blog/main')
@section('content')
<div class="container mx-auto py-3 mt-12 mb-12 dark:bg-gray-900">
    <h2 class="my-4 text-xl text-center font-bold text-white rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400 uppercase">{{ $m_category?->name }}</h2>
    <div class="w-full mb-12">
        <div class="h-1 mx-auto gradient w-64 my-0 py-0 rounded-t bg-green-700"></div>
    </div>
    <div class="flex flex-wrap mt-12">
        @foreach ($posts as $post)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-4 dark:bg-gray-900 mt-4 mb-6 transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-900 dark:border-gray-700 mx-3">
                <a href="/blog/post/{{ $post->slug }}" title="{{ $post->title }}">
                    <img class="rounded-t-lg" src="{{Voyager::image( $post->image )}}" alt="{{ $post->title }}" width="100%" height="100%" />
                </a>
                <div class="p-5">
                    <a href="/blog/post/{{ $post->slug }}" title="{{ $post->title }}">
                        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h3>
                    </a>
                    <p class="mb-3 text-gray-700 text-sm font-semibold dark:text-gray-400">{{ Str::substr($post->excerpt, 0, 120)}}...</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="p-3 mt-6">
                {{ $posts->links('pagination::simple-tailwind') }}
    </div>
</div>
@endsection
