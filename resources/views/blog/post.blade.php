@extends('/blog/main')
@section('content')
<div class="container mx-auto flex flex-wrap py-3 mt-12 dark:bg-gray-800">
    <div class="w-full md:w-2/3 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal " style="font-family:Georgia,serif;">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
            <img src="{{ Voyager::image( $post->image ) }}">
        </a>
        <!--Title-->
        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-green-400 pt-6 pb-2 text-3xl md:text-4xl">{{ $post->title }}</h1>
            <p class="text-bold text-md pb-3 ">
                <span class="bg-blue-100 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-gray-800">
                      <ion-icon name="bookmark-outline" class="mr-2"></ion-icon> {{ $post->category->name }}
                  </span>
                </p>
            <p class="text-sm pb-3 text-gray-500 dark:text-gray-400">
                By <a href="#" class="font-semibold text-gray-400 hover:text-gray-200">bahaeddine</a>, Published on {{ $post->created_at }}
            </p>
        </div>
        <!--Post Content-->
        {!! $post->body !!}
        <!--/ Post Content-->
        <hr class="mt-6 mb-6 divide-y-4 divide-green-400/25 ...">
        <div class="w-full">
            @comments(['model' => $post])
        </div>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
