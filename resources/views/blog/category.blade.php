@extends('/blog/main')
@section('title', $m_category->name)
@section('content')
 <!-- container -->
        <div class="container mx-auto py-3 mt-12 mb-12 dark:bg-gray-800">
            <h2 class="my-4 text-xl text-center font-bold text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400 uppercase">{{ $m_category?->name }} POSTS</h2>
            <div class="w-full mb-6">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t bg-green-700"></div>
            </div>
            <div class="flex flex-wrap mt-12">
                @foreach ($posts as $post)
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-4 dark:bg-gray-800 mt-4 mb-6">
                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3">
                        <a href="/blog//post/{{ $post->slug }}">
                            <img class="rounded-t-lg" src="{{Voyager::image( $post->image )}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="/blog//post/{{ $post->slug }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                            </a>
                            <p class="mb-3 text-gray-400 text-sm font-semibold dark:text-gray-400">{{ Str::substr($post->excerpt, 0, 40)}}...</p>
                            <a href="/blog/post/{{ $post->slug }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Read more  </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection
