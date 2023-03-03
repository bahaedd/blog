@extends('/blog/main')
@section('content')
<div class="container mx-auto flex flex-wrap py-3 mt-12 dark:bg-gray-800">
    <div class="w-full md:w-2/3 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal " style="font-family:Georgia,serif;">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75" title="logo">
            <img src="{{Voyager::image( setting('site.logo'))}}">
        </a>
        <!--Title-->
        <div class="font-sans">
            <h1 class="font-bold font-sans break-normal text-green-400 pt-6 pb-2 text-3xl md:text-4xl">Post Template</h1>
            <p class="text-sm pb-3 text-gray-500 dark:text-gray-400">
                By <a href="#" class="font-semibold text-gray-400 hover:text-gray-200">bahaeddine</a>, Published on date
            </p>
        </div>
        <!--Post Content-->
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Laravel allows developers to build web applications efficiently. One common task in web development is to change the date format of data displayed on the front-end of the application. In this post, we will discuss several ways to change date formats in Laravel.</p>

        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Use Carbon Package</h3>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Carbon is a popular PHP library used for manipulating dates and times. Laravel comes with Carbon pre-installed, so we can easily use it to format dates in our application. We can create a Carbon instance from a date string and then format it using the format method. For example, to format a date string in "Y-m-d" format to "d/m/Y", we can use the following code:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
               <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #000000; font-weight: bold;">use</span> Carbon\Carbon<span style="color: #339933;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">&nbsp;</div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: yellow;">$date</span> <span style="color: #339933;">=</span> Carbon<span style="color: #339933;">::</span><span style="color: red;">createFromFormat</span><span style="color: #009900;">&#40;</span><span style="color: white;">'Y-m-d'</span><span style="color: #339933;">,</span> <span style="color: white;">'2023-03-03'</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">-&gt;</span><span style="color: red;">format</span><span style="color: #009900;">&#40;</span><span style="color: white;">'d/m/Y'</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li></ol></code>
        </div>

        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Use PHP's date() Function</h3>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">PHP's built-in <code >date()</code> function can also be used to format dates. We can pass a date string and a format string to the <code >date()</code> function to get the desired output. For example, to format a date string in <code >"Y-m-d"</code> format to <code >"d/m/Y"</code>, we can use the following code:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
              <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: yellow;">$date</span> <span style="color: #339933;">=</span> <span style="color: red;">date</span><span style="color: #009900;">&#40;</span><span style="color: white;">'d/m/Y'</span><span style="color: #339933;">,</span> <span style="color: red;">strtotime</span><span style="color: #009900;">&#40;</span><span style="color: white;">'2023-03-03'</span><span style="color: #009900;">&#41;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li></ol></code>
        </div>

        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Use Blade's date() Function</h3>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Blade is Laravel's templating engine that allows us to write concise and expressive templates. Blade has a <code>date()</code> function that we can use to format dates. We can pass a date string, a format string, and a timezone (optional) to the <code>date()</code> function. For example, to format a date string in "Y-m-d" format to "d/m/Y", we can use the following code:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
              <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&#123;</span><span style="color: #009900;">&#123;</span> <span style="color: yellow;">date</span><span style="color: #009900;">&#40;</span><span style="color: white;">'d/m/Y'</span><span style="color: #339933;">,</span> <span style="color: yellow;">strtotime</span><span style="color: #009900;">&#40;</span><span style="color: white;">$date</span><span style="color: #009900;">&#41;</span><span style="color: #009900;">&#41;</span> <span style="color: #009900;">&#125;</span><span style="color: #009900;">&#125;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">&nbsp;</div></li></ol></code>
        </div>

        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Use Localization</h3>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Laravel has built-in support for localization, which allows us to format dates according to the user's preferred language and format. We can define our date formats in the localization files and use the <code>trans()</code> function to translate the formatted date. For example, to format a date string in "Y-m-d" format to "d/m/Y" for the English language, we can define the following key-value pair in the <code class="text-sm text-blue-700">resources/lang/en/messages.php</code> file:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
             <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: yellow;">'date_format'</span> <span style="color: #339933;">=&gt;</span> <span style="color: yellow;">'d/m/Y'</span><span style="color: #339933;">,</span></div></li></ol></code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">We can then use the <code>trans()</code> function to translate the date:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
             <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&#123;</span><span style="color: #009900;">&#123;</span> trans<span style="color: #009900;">&#40;</span><span style="color: yellow;">'messages.date_format'</span><span style="color: #339933;">,</span> <span style="color: #009900;">&#91;</span><span style="color: yellow;">'date'</span> <span style="color: #339933;">=&gt;</span> <span style="color: #000088;">$date</span><span style="color: #009900;">&#93;</span><span style="color: #009900;">&#41;</span> <span style="color: #009900;">&#125;</span><span style="color: #009900;">&#125;</span></div></li></ol></code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">In this post, we discussed several ways to change date formats in Laravel, including using the Carbon library, PHP's date() function, Blade's date() function, and localization. By using these techniques, we can easily format dates in our Laravel applications to suit our needs.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy your code journey...</p>

    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
