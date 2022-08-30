<div class="w-full md:w-1/3 flex flex-col items-center my-3 px-3 dark:bg-gray-800">
    <h2 class="mb-4 text-xl font-bold text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400">RECENT POSTS</h2>
    <div class="w-full mb-6">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t bg-green-700"></div>
    </div>
    <div class="grid grid-cols-2 gap-4">
        @foreach ($recent_posts as $post)
        <div>
            <div class="relative max-h-100 overflow-hidden rounded">
                <a href="/post/{{ $post->slug }}" class="hover:opacity-75">
                    <img class="max-w-full w-full mx-auto h-auto" src="{{Voyager::image( $post->image )}}" alt="Image description">
                </a>
                <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                    {{-- <a href="/post/{{ $post->slug }}">
                        <h2 class="text-3xl font-bold capitalize text-gary-700 mb-3">{{ $post->title }}</h2>
                    </a> --}}
                    {{-- <a href="/post/{{ $post->slug }}" class="text-white font-bold hidden sm:inline-block">{{ $post->title}}</a>
                    <div class="pt-2">
                        <div class="text-gray-100">
                            <a href="category/{{$post->category->slug}}" class="inline-block h-3 border-l-2 border-green-600 mr-2">{{ $post->category->name }}</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
        <h2 class="my-2 mt-4 text-xl font-bold text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400">CATEGORIES</h2>
        <div class="w-full mb-6">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t bg-green-700"></div>
            </div>
        <div class="w-full flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:border-gray-700 my-4 dark:bg-gray-800">
            @foreach ($categories as $category)
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <a href="category/{{$category->slug}}"class="mx-3 text-sm font-semibold text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400 hover:underline ml-3">{{ $category->name }}</a>
                </div>
            </div>
            @endforeach
        </div>
        <h2 class="my-2 mt-4 text-xl font-bold text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400">TAGS</h2>
        <div class="w-full mb-6">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t bg-green-700"></div>
            </div>
        <div class="w-full flex flex-row max-w-sm px-8 py-6 mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:border-gray-700 my-4 dark:bg-gray-800">
            @foreach ($tags as $tag)
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    {{-- <a href="#"class="mx-3 text-sm font-semibold text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400 hover:underline ml-3">{{ $tag->name }}</a> --}}
                    <a href="#" class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">{{ $tag->name }}</a>
                </div>
            </div>
            @endforeach
        </div>
</div>
