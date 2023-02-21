@extends('/blog/main')
@section('content')
<div class="container mx-auto flex flex-wrap py-3 mt-12 dark:bg-gray-800">
    <div class="w-full md:w-2/3 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal " style="font-family:Georgia,serif;">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
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
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">A sitemap is a file that lists all of the pages on a website to help search engines crawl and index the site more efficiently. Sitemap files are typically in XML format, and they provide valuable information about a website's content, organization, and structure.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">To generate a sitemap XML file in Laravel 9/10, we can use the <code>spatie/laravel-sitemap</code> package. This package provides a simple and convenient way to create and update sitemaps in Laravel.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Let's discover how to generate a sitemap XML in Laravel:</p>
        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Step 1: Install the Package</h3>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">To get started, we need to install the spatie/laravel-sitemap package. We can do this using Composer by running the following command:</p>       
         <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> composer require spatie/laravel-sitemap</div>
        </div>

        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Step 2: Create a Sitemap Controller</h3>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Next, we need to create a controller that will generate our sitemap XML file. We can do this by running the following command:</p>       
         <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan make:controller SitemapController</div>
        </div>

        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Step 3: add the route</h3>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">We need to define a route that will point to our sitemap controller. We can do this in our routes/web.php file by adding the following code:</p>       
         <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-700  font-bold subpixel-antialiased bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm">Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');</div>
        </div>
        
        
        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Step 4: Generate the sitemap</h3>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">In our <code>SitemapController</code>, we need to create a method that will generate our sitemap. We can do this using the Sitemap class provided by the <code>spatie/laravel-sitemap</code> package.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Here's an example of how we can generate a sitemap that includes all of our website's pages:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-green-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <code class="">
                    <p>use Spatie\Sitemap\Sitemap;</p>
                    <p>use Spatie\Sitemap\Tags\Url;</p>
                    <p></p>
                    <p class="text-red-700">class SitemapController extends Controller</p>
                    <p class="text-red-700">{</p>
                    <p class="text-blue-700">    public function index()</p>
                    <p class="text-blue-700">    {</p>
                    <p>        $sitemap = Sitemap::create();</p>
                    <p></p>
                    <p class="text-white">        // Add URLs to sitemap</p>
                    <p>        $sitemap->add(Url::create('/home')->setPriority(1.0));</p>
                    <p>        $sitemap->add(Url::create('/blog')->setPriority(0.9));</p>
                    <p>        $sitemap->add(Url::create('/contact')->setPriority(0.8));</p>
                    <p>        $sitemap->add(Url::create('/privacy')->setPriority(0.7));</p>
                    <p></p>
                    <p class="text-white">        // Generate sitemap</p>
                    <p>        return $sitemap->render('xml');</p>
                    <p class="text-blue-700">    }</p>
                    <p class="text-red-700">}</p>
                    <p></p>
                </code>  
        </div>
        

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">In this example, we're creating a new instance of the Sitemap class and adding URLs to it using the add method. We can set the priority of each URL using the setPriority method, with a value between 0.0 and 1.0.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Once we've added all of our URLs to the sitemap, we can generate the XML file using the render method and passing in the file format we want (xml in this case).</p>

        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Step 5: Generate the sitemap</h3>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Now that we've generated our sitemap, we can test it by visiting the /sitemap.xml URL in our browser. If everything is working correctly, we should see an XML file that lists all of our website's pages.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">That's it for generating sitemap XML file in Laravel.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy your code journey...</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
