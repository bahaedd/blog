@extends('/blog/main')
@section('content')
<!-- container -->
<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-color: black; height: 60vh; max-height:460px;">
    <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
        <!--Title-->
        <p class="text-green-500 font-extrabold text-xl md:text-5xl">
            {{ $m_category?->name }}
        </p>
        <p class="font-bold leading-relaxed text-white text-base mt-6">{{ $m_category?->description }}</p>
    </div>
</div>
<!--Container-->
<div class="container px-4 md:px-0 max-w-12xl mx-auto -mt-32 dark:bg-gray-800 rounded-lg">
    <div class="mx-0 sm:mx-6">
        <div class="text-white rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400 w-full text-xl md:text-2xl leading-normal rounded-t">
            <!--Posts Container-->
            <div class="flex flex-wrap justify-between p-6 -mx-6">
                @forelse ($posts as $post)
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-900 dark:border-gray-700 mx-3">
                        <a href="/blog/post/{{ $post->slug }}" title="{{ $post->title }}">
                            <img class="rounded-t-lg" src="{{Voyager::image( $post->image )}}" alt="{{ $post->title }}" width="100%" height="100%" />
                        </a>
                        <div class="p-5">
                            <a href="/blog/post/{{ $post->slug }}" title="{{ $post->title }}">
                                <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h3>
                            </a>
                            @foreach ($post->tags as $tag)
                                    <a href="/blog/tag/{{ $tag->slug }}" title="{{ $tag->name }}" class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">#{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @empty
                    <div class="max-w-4xl mx-auto pt-12 text-center break-normal">
                        <p class="font-bold leading-relaxed text-white text-base mt-6">Coming Soon ...</p>
                    </div>
                @endforelse
            </div>
            <!--/ Post Content-->
            <div class="p-3 mt-6">
                {{ $posts->links('pagination::simple-tailwind') }}
            </div>
        </div>
    </div>
</div>
@endsection
