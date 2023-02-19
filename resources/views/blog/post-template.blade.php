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
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Artisan is Laravel's command-line interface, and it comes with a range of built-in commands that can help you with common tasks like generating controllers, models, and migrations. But sometimes you may need to create a custom Artisan command to automate a task specific to your project. In this post, we'll show you how to create a custom Artisan command in Laravel .</p>
        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 1 : Create the Command</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">To create a new custom Artisan command, you can use the  <code>make:command</code> Artisan command. This command will generate a new command class in the <code>app/Console/Commands</code> directory. </p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">in this tutorial I will provide an example command that will create a new file in the <code>storage/app</code> directory with the given name and content:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan make:command CreateFile</div>
        </div>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">This command will generate a CreateFile class in the <code>app/Console/Commands</code>  directory. Open the <code>CreateFile.php</code> file and add the code below:</p>       
         <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-green-400 text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>namespace App\Console\Commands;</p>
                    <p></p>
                    <p>use Illuminate\Console\Command;</p>
                    <p>use Illuminate\Support\Facades\File;</p>
                    <p></p>
                    <p class="text-red-400">class CreateFile extends Command</p>
                    <p class="text-red-400">{</p>
                    <p>    /**</p>
                    <p>     * The name and signature of the console command.</p>
                    <p>     *</p>
                    <p>     * @var string</p>
                    <p>     */</p>
                    <p class="text-blue-400">    protected $signature = 'file:create {name} {content}';</p>
                    <p></p>
                    <p>    /**</p>
                    <p>     * The console command description.</p>
                    <p>     *</p>
                    <p>     * @var string</p>
                    <p>     */</p>
                    <p class="text-blue-400">    protected $description = 'Create a new file with the given name and content';</p>
                    <p></p>
                    <p>    /**</p>
                    <p>     * Execute the console command.</p>
                    <p>     *</p>
                    <p>     * @return void</p>
                    <p>     */</p>
                    <p class="text-blue-400">    public function handle()</p>
                    <p class="text-blue-400">    {</p>
                    <p class="text-blue-400">        $name = $this->argument('name');</p>
                    <p class="text-blue-400">        $content = $this->argument('content');</p>
                    <p></p>
                    <p class="text-blue-400">        File::put(storage_path('app/' . $name), $content);</p>
                    <p></p>
                    <p class="text-blue-400">        $this->info("File {$name} created successfully!");</p>
                    <p class="text-blue-400">    }</p>
                    <p class="text-red-400">}</p>
                    <p></p>
                </pre>  
        </div>

        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 2 :  Register the Command</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Next, you need to register your custom Artisan command with Laravel. Open the <code>app/Console/Kernel.php</code> file and add your command class to the $commands array:</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p></p>
                    <p>protected $commands = [</p>
                    <p>    \App\Console\Commands\CreateFile::class,</p>
                    <p>];</p>
                </pre>  
        </div>

        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 3 :  Use the Command</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Now you can run your custom Artisan command using the <code>php artisan</code>  command. Here's an example of how to create a new file called example.txt with the content "Congrats, your Artisan custom command created successfly !":</p>
        
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan file:create example.txt "Congrats, your Artisan custom command created successfly !"
            </div>
        </div>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">This will create a new file in the <code>storage/app</code> directory with the given name and content, and output a success message to the console.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Creating a custom Artisan command in Laravel  is a powerful way to automate tasks specific to your project. By following the steps outlined in this post, you can create your own custom commands to improve your workflow and save time.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy your code journey...</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
