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
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">The latest release of Laravel, version 10, has been launched. This updated version comes with several new features, including support for a minimum PHP v8.1 version, the inclusion of the Laravel Pennant package, the addition of invokable validation rules, and native type declarations, among other improvements.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">On February 14, 2023, Laravel 10 was introduced as the most recent version. However, it's important to note that there is no need to rush to update all of your projects right away. While the previous version with LTS was Laravel 6, each major version of the framework now receives two years of updates, providing ample time to assess and upgrade your codebase.</p>


        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Bug fixes for Laravel 9 will continue to be available until August 23, 2023, with security fixes available until February 6, 2024.</p>

        <h3 class="pt-6 font-body leading-relaxed text-blue-700">How to install Laravel 10?</h3>      

        <div class="coding inverse-toggle px-5 pt-5 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-4 flex text-sm">composer <span class="text-white ml-2">create-project --prefer-dist laravel/laravel example-app</span></div>
        </div>

        <h3 class="pt-6 font-body leading-relaxed text-blue-700">What's new in Laravel 10?</h3>

        <h4 class="pt-6 font-body leading-relaxed text-green-600">#PHP 8.1</h4>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Laravel 10.x requires a minimum PHP version of 8.1.</p>

        <h4 class="pt-6 font-body leading-relaxed text-green-600">#Types</h4>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Initially, when Laravel was released, it utilized all available type-hinting features in PHP. But over the years, PHP has added several new features like primitive type-hints, return types, and union types.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">In Laravel 10.x, the framework has undergone a comprehensive update, including the application skeleton and all stubs. This update has introduced argument and return types to all method signatures while removing any unnecessary "doc block" type-hint information.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Importantly, this update does not affect the backward compatibility of existing applications. Therefore, applications without these type-hints will continue to function normally without any issues.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Laravel has introduced a new package called "Laravel Pennant," a first-party package designed to help you manage feature flags in your application. Laravel Pennant offers a straightforward and lightweight approach to handle your application's feature flags. It includes an in-memory array driver and a database driver out of the box for persistent feature storage.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">You can quickly define features in Laravel Pennant using the Feature::define method, which requires the feature name and a callback function to define the flag's behavior. For instance:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
               <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #000000; font-weight: bold;">use</span> Laravel\Pennant\Feature<span style="color: #339933;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #000000; font-weight: bold;">use</span> Illuminate\Support\Lottery<span style="color: #339933;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">&nbsp;</div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">Feature<span style="color: #339933;">::</span><span style="color: red;">define</span><span style="color: #009900;">&#40;</span><span style="color: #0000ff;">'new-feature-flag'</span><span style="color: #339933;">,</span> <span style="color: #000000; font-weight: bold;">function</span> <span style="color: #009900;">&#40;</span><span style="color: #009900;">&#41;</span> <span style="color: #009900;">&#123;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #b1b100;">return</span> Lottery<span style="color: #339933;">::</span><span style="color: blue;">odds</span><span style="color: #009900;">&#40;</span><span style="color: #cc66cc;">1</span><span style="color: #339933;">,</span> <span style="color: #cc66cc;">10</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&#125;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li></ol></code>
        </div>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Once you define a feature flag, you can easily check if the current user has access to it using the <code>Feature::active</code> method:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
               <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #b1b100;">if</span> <span style="color: #009900;">&#40;</span>Feature<span style="color: #339933;">::</span><span style="color: #004000;">active</span><span style="color: #009900;">&#40;</span><span style="color: #0000ff;">'new-feature-flag'</span><span style="color: #009900;">&#41;</span><span style="color: #009900;">&#41;</span> <span style="color: #009900;">&#123;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #666666; font-style: italic;">// Do something if the feature is active</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&#125;</span></div></li></ol></code>
        </div>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">For added convenience, Laravel Pennant also offers Blade directives that can be used to check if a particular feature flag is active, like this:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
               <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #339933;">@</span>feature<span style="color: #009900;">&#40;</span><span style="color: #0000ff;">'new-feature-flag'</span><span style="color: #009900;">&#41;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;</span>div<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #339933;">&lt;!--</span> <span style="color: #339933;">...</span> <span style="color: #339933;">--&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;/</span>div<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #339933;">@</span>endfeature</div></li></ol></code>
        </div>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">This makes it easy to display specific features or functionality to your users based on whether they have access to a particular feature flag.</p>

        <h4 class="pt-6 font-body leading-relaxed text-green-600">#Language Directory Command</h4>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">In earlier versions of Laravel, the framework provided a default "lang" directory for managing multiple languages. However, in Laravel 10, you will need to create the "lang" directory manually by running the following command:</p>

        <div class="coding inverse-toggle px-5 pt-5 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-4 flex text-sm">php artisan <span class="text-white ml-2">lang:publish</span></div>
        </div>

        <h4 class="pt-6 font-body leading-relaxed text-green-600">#The Redirect::home Method</h4>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">In Laravel 10, the <code>Redirect::home()</code> method has been removed from the route file. If you want to create a home route, you must use a named route and define it like the example below:</p>

        <div class="coding inverse-toggle px-5 pt-5 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #b1b100;">return</span> Redirect<span style="color: #339933;">::</span><span style="color: #004000;">route</span><span style="color: #009900;">&#40;</span><span style="color: #0000ff;">'home'</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li></ol></code>
        </div>

        <h4 class="pt-6 font-body leading-relaxed text-green-600">#Pest Scaffolding</h4>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">New Laravel projects may now be created with Pest test scaffolding by default. To opt-in to this feature, provide the <code>--pest</code> flag when creating a new application via the Laravel installer:</p>

        <div class="coding inverse-toggle px-5 pt-5 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-4 flex text-sm">laravel <span class="text-white ml-2">new example-application</span>--pest</div>
        </div>

        <h4 class="pt-6 font-body leading-relaxed text-green-600">#Generator CLI Prompts</h4>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">To improve the framework's developer experience, all of Laravel's built-in <code>make</code> commands no longer require any input. If the commands are invoked without input, you will be prompted for the required arguments:</p>

        <div class="coding inverse-toggle px-5 pt-5 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-4 flex text-sm">php artisan <span class="text-white ml-2">make:controller</span></div>
        </div>

        <h4 class="pt-6 font-body leading-relaxed text-green-600">#Horizon / Telescope Facelift</h4>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white"><a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="https://laravel.com/docs/10.x/horizon" title="Horizon">Horizon</a> and <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="https://laravel.com/docs/10.x/telescope" title="Telescope">Telescope</a> have been updated with a fresh, modern look including improved typography, spacing, and design</p>

    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
