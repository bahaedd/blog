@extends('/blog/main')
@section('content')
<!-- container -->
<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-color: black; height: 60vh; max-height:460px;">
    <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
        <!--Title-->
        <p class="text-green-500 font-extrabold text-xl md:text-5xl">
            Tutorials
        </p>
        <p class="font-bold leading-relaxed text-white text-base mt-6">This section lists all tutorials sort by category</p>
    </div>
</div>
<!--Container-->
<div class="container px-4 md:px-0 max-w-12xl mx-auto -mt-32 rounded-lg">
    <div class="mx-0 sm:mx-6">
        <div class="text-white rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400 w-full text-xl md:text-2xl leading-normal rounded-t">
            <!--Posts Container-->
            <div class="flex flex-wrap justify-between p-6 -mx-6">
                @forelse ($categories as $category)
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-900 dark:border-gray-700 mx-3">
                        <a href="/blog/category/{{ $category->slug }}" title="{{ $category->name }}">
                            <img class="rounded-t-lg" src="{{Voyager::image( setting('site.logo'))}}" alt="{{ $category->name }}" width="100%" height="100%" />
                        </a>
                        <div class="p-5 text-center">
                            <a href="/blog/category/{{ $category->slug }}" title="{{ $category->name }}">
                                <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $category->name }}</h3>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="max-w-4xl mx-auto pt-12 text-center break-normal">
                        <p class="font-bold leading-relaxed text-white text-base mt-6">Coming Soon ...</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
