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
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">JSON has become a popular format for representing complex data structures in modern web applications. As such, the ability to store JSON data in a database is a critical feature for many developers. Laravel, provides a convenient way to handle JSON data and store it in a database.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">When dealing with large or unstructured data, it may not be practical to create numerous fields in a database table with nullable fields. In such cases, a JSON data type can be used to store the values instead. If you need to store a JSON array in a Laravel database, I can provide a straightforward example of how to do so.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">To begin, you will first create a migration that includes a JSON column. Then, you will create a model that includes a getter and setter. When creating records, you can pass the data as an array, and when retrieving records, you will receive an array. By following this example, you can easily learn how to store and access a JSON array in a Laravel database.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Step 1: Installation</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">To get started, you need to have a Laravel application set up. If you don't have one, you can create a new Laravel application by running the following command:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> composer create-project --prefer-dist laravel/laravel project_name</div>
        </div>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Step 2: Create Migration</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">To set up the "examples" table in the database with "title" and "data" (JSON column) columns, we will need to create a database migration. Additionally, we will create a model for the "examples" table:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan make:model Example -mc</div>
        </div>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">This command will create the Model and the "examples" table and also a Controller</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Now let's add the "title" and "data" culumns to the "examples" table</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-gray-400  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p class="text-blue-400  text-center">database/migrations/2023_02_17_147774_create_examples_table.php</p>
                    <p class="text-green-400"> public function up()</p>
                    <p class="text-green-400">    {</p>
                    <p class="text-green-400">        Schema::create('examples', function (Blueprint $table) {</p>
                    <p>            $table->id();</p>
                    <p class="text-blue-400">            $table->string('title');</p>
                    <p class="text-blue-400">            $table->json('data')->nullable();</p>
                    <p>            $table->timestamps();</p>
                    <p class="text-green-400">        });</p>
                    <p class="text-green-400">    }</p>
                </pre>  
        </div>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Then run migration command to create the table.</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan migrate</div>
        </div>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Now let's add the getter and setter to our Model</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-gray-400  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p class="text-blue-400  text-center">App/Models/Example.php</p>
                    <p class="text-green-400">class Example extends Model</p>
                    <p class="text-green-400">{</p>
                    <p>    use HasFactory;</p>
                    <p>    protected $fillable = [</p>
                    <p>        'title', 'data' </p>
                    <p>    ]; </p>
                    <p class="text-green-400">    protected function data(): Attribute</p>
                    <p class="text-green-400">    {</p>
                    <p class="text-blue-400">        return Attribute::make(</p>
                    <p class="text-blue-400">            get: fn ($value) => json_decode($value, true),</p>
                    <p class="text-blue-400">            set: fn ($value) => json_encode($value),</p>
                    <p class="text-blue-400">        );</p>
                    <p class="text-green-400">    } </p>
                    <p class="text-green-400">}</p>
                </pre>  
        </div> 
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Step 3: Create the Route</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Now we have to add the route</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-gray-400  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p class="text-blue-400  text-center">routes/routes.php</p>
                    <p class="text-green-400"><?php</p>
                    <p class="text-green-400">use Illuminate\Support\Facades\Route;</p>
                    <p class="text-green-400">use App\Http\Controllers\ExampleController;</p>
                    <p>   </p>
                    <p> /* </p>
                    <p>|-------------------------------------------------------------------------- </p>
                    <p>| Web Routes</p>
                    <p>|-------------------------------------------------------------------------- </p>
                    <p>|</p>
                    <p> */ </p>
                    <p class="text-blue-400">Route::get('json', [ExampleController::class, 'index']);</p>
                </pre>  
        </div> 
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Step 3: Add logic to Controller</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">in the <code>index()</code> will store the records to our database and dump them to figure out the output</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-gray-400  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p class="text-blue-400  text-center">app/Http/Controllers/ItemController.php</p>
                    <p class="text-green-400">use Illuminate\Http\Request;</p>
                    <p class="text-green-400">use App\Models\Example;</p>
                    <p>  </p>
                    <p class="text-green-400" >class ExampleController extends Controller</p>
                    <p class="text-green-400">{</p>
                    <p class="text-green-400">    public function index()</p>
                    <p class="text-green-400">    {</p>
                    <p class="text-blue-400">        $input = [</p>
                    <p class="text-blue-400">            'title' => 'JSON example',</p>
                    <p class="text-blue-400">            'data' => [</p>
                    <p class="text-blue-400">                '1' => 'Laravel',</p>
                    <p class="text-blue-400">                '2' => 'TailwindCSS',</p>
                    <p class="text-blue-400">                '3' => 'Livewire'</p>
                    <p class="text-blue-400">                '4' => 'Flowbite'</p>
                    <p class="text-blue-400">            ]</p>
                    <p class="text-blue-400">        ];</p>
                    <p>  </p>
                    <p>        $json = Example::create($input);</p>
                    <p>  </p>
                    <p>        dd($json->data);</p>
                    <p>  </p>
                    <p class="text-green-400">    }</p>
                    <p class="text-green-400">}</p>
                </pre>  
        </div>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Now if we check the URL: <code> http://localhost:8000/examples </code> we got this: </p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400  font-semibold subpixel-antialiased bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <p>array:3 [</p>
                <p></p>
                <p>     1 => "Laravel"</p>
                <p></p>
                <p>     2 => "TailwindCSS"</p>
                <p></p>
                <p>     3 => "Livewire"</p>
                <p></p>
                <p>     4 => "Flowbite"</p>
                <p></p>
                <p>]</p>
        </div> 
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">In conclusion, Laravel provides an intuitive and convenient way to store JSON data in a database. With its built-in support for JSON columns, you can easily save and retrieve complex, structured data within your application. By leveraging the power of Eloquent and the schema builder, you can take full advantage of Laravel's capabilities and create applications that are robust and scalable. Whether you're building a small app or a large-scale enterprise system, Laravel's JSON handling capabilities offer a powerful tool to manage your data effectively.</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy Laravel...</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
