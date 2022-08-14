@extends('main')
@section('content')
<div class="container mx-auto flex flex-wrap py-3 mt-12 dark:bg-gray-800">
    <div class="w-full md:w-2/3 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal " style="font-family:Georgia,serif;">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
            <img src="{{ Voyager::image( $post->image ) }}">
        </a>
        <!--Title-->
        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-gray-400 pt-6 pb-2 text-3xl md:text-4xl">{{ $post->title }}</h1>
            <p class="text-sm pb-3">
                By <a href="#" class="font-semibold text-gray-400 hover:text-gray-200">bahaeddine</a>, Published on {{ $post->created_at }}
            </p>
        </div>
        <!--Post Content-->
        {!! $post->body !!}
        <!--/ Post Content-->
    </div>
    <!-- sidebar -->
    @include('layouts.sidebar')
</div>
@endsection
