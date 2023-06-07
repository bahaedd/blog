<div class="w-full md:w-1/3 flex flex-col items-center my-3 px-3 dark:bg-gray-800">
    <h2 class="mb-4 text-xl font-bold text-white rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400">RECENT POSTS</h2>
    <div class="w-full mb-6">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t bg-green-700"></div>
    </div>
    <div class="grid grid-cols-2 gap-4">
        @foreach ($recent_posts as $post)
        <div>
            <div class="relative max-h-100 overflow-hidden rounded transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
                <a href="/blog/post/{{ $post->slug }}" class="hover:opacity-75">
                    <img class="max-w-full w-full mx-auto h-auto" src="{{Voyager::image( $post->image )}}" alt="Image description">
                </a>
                <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h2 class="mb-4 text-xl font-bold text-white rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400">Popular Tags</h2>
    <div class="p-5">
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 mb-6 rounded dark:bg-blue-900 dark:text-blue-300">Tag</span>
    </div>
    {{-- <a href="https://hostinger.com?REFERRALCODE=1SIHASSI82" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mt-12">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg p-4" src="{{URL('/images/hostinger.png')}}" alt="Hostinger">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hostinger</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Server locations all around the world: USA, UK, Netherlands, Brazil & Singapore. Your project deserves the best Domain.</p>
        </div>
    </a> --}}
</div>
</div>
