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
                <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">QR codes, or Quick Response codes, are two-dimensional barcodes that can be scanned with a smartphone or other mobile device to quickly access information or perform an action. QR codes are becoming increasingly popular for marketing, ticketing, and other applications.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">In this post, we'll compare two popular packages for generating QR codes in Laravel: BaconQrCode and Simple-QRcode.</p>
        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 1 : install packages</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">You install the two packages using the commands below:</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">for BaconQrCode package:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> composer require bacon/bacon-qr-code</div>
        </div>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">for Simple-QRcode package:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> composer require simplesoftwareio/simple-qrcode</div>
        </div>
        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 2 : Create Controller && Generating QR Codes</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white"> Let's create the QrCodeController:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan make:controller QrCodeController</div>
        </div>
        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Generating QR Codes with BaconQrCode</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">To generate a QR code using the BaconQrCode package, you can use the BaconQrCode\Encoder class to encode the data you want to display in the QR code, and then use the BaconQrCode\Renderer\Image\Png class to render the QR code as a PNG image. Here's an example controller method that generates a QR code using BaconQrCode: 
        </p>        
         <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-green-400 text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>use BaconQrCode\Encoder\QrCode;</p>
                    <p>use BaconQrCode\Renderer\Image\Png;</p>
                    <p></p>
                    <p class="text-red-400">class QrCodeController extends Controller</p>
                    <p class="text-red-400">{</p>
                    <p>    public function generateWithBacon(Request $request)</p>
                    <p>    {</p>
                    <p>        $qrCode = new QrCode($request->input('text'));</p>
                    <p>        $renderer = new Png();</p>
                    <p>        $image = $renderer->render($qrCode);</p>
                    <p>        </p>
                    <p>        return response($image, 200, [</p>
                    <p>            'Content-Type' => 'image/png',</p>
                    <p>            'Content-Disposition' => 'inline; filename="qrcode.png"',</p>
                    <p>        ]);</p>
                    <p class="text-red-400">    }</p>
                    <p class="text-red-400">}</p>
                </pre>  
        </div>
         <h6 class="pt-6 font-body leading-relaxed text-blue-400">Generating QR Codes with Simple-QRcode</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">To generate a QR code using the Simple-QRcode package, you can use the SimpleSoftwareIO\QrCode\Facades\QrCode facade to generate a QR code from the text you want to display. Simple-QRcode provides several configuration options for customizing the size, margin, color, and other aspects of the generated QR code. Here's an example controller method that generates a QR code using Simple-QRcode:</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-green-400 text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>use SimpleSoftwareIO\QrCode\Facades\QrCode;</p>
                    <p></p>
                    <p class="text-red-400">class QrCodeController extends Controller</p>
                    <p class="text-red-400">{</p>
                    <p>    public function generateWithSimple(Request $request)</p>
                    <p>    {</p>
                    <p>        return QrCode::size(300)</p>
                    <p>            ->margin(10)</p>
                    <p>            ->generate($request->input('text'));</p>
                    <p>    }</p>
                    <p class="text-red-400">}</p>
                </pre>  
        </div>

        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 3 :  Add Routes</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>Route::get('/bacon-code/{text}', [QrCodeController::class, 'generateWithBacon']);</p>
                    <p>Route::get('/simple-code/{text}', [QrCodeController::class, 'generateWithSimple']);</p>
                </pre>  
        </div>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">For Simple-QRcode package you need to open <code>config/app.php</code> file and add service provider and aliase:</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>'providers' => [</p>
                    <p></p>
                    <p>    ....</p>
                    <p></p>
                    <p>    SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class</p>
                    <p></p>
                    <p>],</p>
                    <p></p>
                    <p>'aliases' => [</p>
                    <p></p>
                    <p>    ....</p>
                    <p></p>
                    <p>    'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class</p>
                    <p></p>
                    <p>],</p>
                </pre>  
        </div>

        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 4 :  Run you application</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Test your QR code generation by visiting the /bacon-code/{text} and /simple-code/{text} routes in your application and replacing {text} with the text you want to generate a QR code for. You should see an image of the QR code generated from the text you entered.</p>
        

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Both the BaconQrCode and Simple-QRcode packages are excellent choices for generating QR codes in Laravel, and which one you choose will depend on your specific needs and preferences. BaconQrCode provides more fine-grained control over the encoding and rendering process, while Simple-QRcode offers a more streamlined and user-friendly interface for generating QR codes.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">And that's it! With these steps, you should be able to generate QR codes in your Laravel application using the Simple-QRcode and BaconQrCode packages. Note that this is just a basic example and you'll likely need to customize and refine the implementation to suit your specific requirements.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy your code journey...</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
