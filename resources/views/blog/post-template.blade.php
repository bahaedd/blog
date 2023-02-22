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
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Barcodes are widely used in various industries for inventory management, tracking, and retail sales. Laravel is a popular PHP framework that provides a set of powerful tools to build web applications, including barcode generation.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">The picqer/php-barcode-generator package is a popular library for generating barcodes in PHP, and it's easy to use with Laravel. Here's a step-by-step guide on how to generate barcodes in Laravel with this package:</p>
        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Step 1: Install the "picqer/php-barcode-generator" package </h3>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">The first step is to install the "picqer/php-barcode-generator" package via Composer. Open your terminal and navigate to your Laravel project directory, then run the following command:</p>       
         <div class="coding inverse-toggle px-5 pt-6 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> composer require picqer/php-barcode-generator</div>
        </div>

        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Step 2: Create a barcode generator class</h3>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Next, we need to create a barcode generator class that will handle the generation of the barcodes. Create a new PHP file in your "app" directory and name it "BarcodeGenerator.php". In this file, we will define a class with a static method that takes a string value and returns the corresponding barcode image.</p>       

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-green-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <code class="">
                    <p><?php</p>
                    <p></p>
                    <p>namespace App;</p>
                    <p></p>
                    <p>use Picqer\Barcode\BarcodeGeneratorPNG;</p>
                    <p></p>
                    <p class="tex-red-700">class BarcodeGenerator</p>
                    <p class="tex-red-700">{</p>
                    <p class="tex-blue-700">    public static function generateBarcode($value, $type)</p>
                    <p class="tex-blue-700">    {</p>
                    <p>        $generator = new BarcodeGeneratorPNG();</p>
                    <p>        $barcode = $generator->getBarcode($value, $type);</p>
                    <p></p>
                    <p>        return $barcode;</p>
                    <p class="tex-blue-700">    }</p>
                    <p class="tex-red-700">}</p>
                </code>  
        </div>
        

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white"> In this example, we're using the <code>BarcodeGeneratorPNG</code>  class from the  <code>"picqer/php-barcode-generator"</code> package to generate barcodes of different types. The "generateBarcode" method takes two parameters: the value to be encoded and the type of barcode to be generated. The method then configures the generator object with the required settings and returns the barcode image in PNG format.</p>

        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Step 3: Create a route for barcode generation</h3>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Now that we have a barcode generator class, we need to create a route that will handle the barcode generation request. Open your "routes/web.php" file and define a new route as follows:</p>       

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-green-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <code class="">
                    <p>Route::get('/barcode/{type}/{value}', function ($type, $value) {</p>
                    <p>    $image = App\BarcodeGenerator::generateBarcode($value, $type);</p>
                    <p></p>
                    <p>    return response($image)->header('Content-type', 'image/png');</p>
                    <p>});</p>
                </code>  
        </div>
        

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white"> In this example, we're defining a new route that takes two parameters: the type of barcode to be generated and the value to be encoded. The route then calls the "generateBarcode" method of the "BarcodeGenerator" class and returns the resulting image with the "image/png" content type.</p>

        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Step 4: Test the barcode generation</h3>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Now that we've generated our sitemap, we can test it by visiting the /sitemap.xml URL in our browser. If everything is working correctly, we should see an XML file that lists all of our website's pages.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">To test the barcode generation, open your web browser and navigate to the following URL:</p>

        <div class="coding inverse-toggle px-5 pt-6 shadow-lg text-green-700  font-bold subpixel-antialiased bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"> http://yourdomain.com/barcode/code39/123456 </div>
        </div>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">This will generate a Code 39 barcode with the value "123456". You can replace the barcode type and value with your own values to generate different barcodes.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">That's it! You now have a fully functional barcode generator in your Laravel application using the "picqer/php-barcode-generator" package. You can use this generator to generate barcodes for products, inventory items, or any other use case that requires barcode scanning.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy your code journey...</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
