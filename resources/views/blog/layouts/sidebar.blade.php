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
        <h2 class="my-2 mt-4 text-xl font-bold text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400">TAGS</h2>
        <div class="w-full mb-6">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t bg-green-700"></div>
            </div>
        <div class="w-full flex flex-row max-w-sm px-8 py-6 mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:border-gray-700 my-4 dark:bg-gray-800">
            @foreach ($tags as $tag)
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <a href="/blog/tag/{{ $tag->slug }}" class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">{{ $tag->name }}</a>
                </div>
            </div>
            @endforeach
        </div>

        


<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd"></path><path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path></svg>
    <a href="#">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Hostinger</h5>
    </a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Server locations all around the world: USA, UK, Netherlands, Brazil & Singapore. Your project deserves the best Domain.</p>
    <a href="https://hostinger.com?REFERRALCODE=1SIHASSI82" class="inline-flex items-center text-blue-600 hover:underline">
        Visit
        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
    </a>
</div>


</div>
