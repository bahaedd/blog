@extends('/blog/main')
@section('content')
<!-- container -->
<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-color: black; height: 60vh; max-height:460px;">
    <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
        <!--Title-->
        <p class="text-green-500 font-extrabold text-xl md:text-5xl">
            AliendevTools
        </p>
        <p class="font-bold leading-relaxed text-white text-base mt-6">This section features free tools for email marketers and web developers, feel free to use any of them.</p>
    </div>
</div>
<!--Container-->
<div class="container px-4 md:px-0 max-w-12xl mx-auto -mt-32 dark:bg-gray-800 rounded-lg">
    <div class="mx-0 sm:mx-6">
        <div class="text-white rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-gray-400 w-full text-xl md:text-2xl leading-normal rounded-t">
            <!--Posts Container-->
            <div class="flex flex-wrap justify-between p-6 -mx-6">
                <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-4">
            @foreach ($tools as $tool)
                <a href="{{ route($tool->url) }}">
                      <div class="group rounded px-8 py-12 shadow bg-green-500">
                        <div class="mx-auto h-8 w-8 text-center">
                          {!! $tool->icon !!}
                        </div>
                        <div class="text-center">
                          <h3 class="pt-2 text-lg font-semibold text-primary group-hover:text-yellow lg:text-xl">{{ $tool->name }}</h3>
                        </div>
                      </div>
                </a>
            @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
