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
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">In many web applications, importing data from CSV files is a common task. Laravel provides an easy way to import CSV files and display their contents. In this tutorial, we will walk you through the process of importing a CSV file and displaying its contents in a Laravel application.</p>

        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Create a route for the CSV import</h3>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">we need to create a route in our Laravel application that will handle the CSV import. Open the routes/web.php file and add the following route:</p>


        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
               <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">Route<span style="color: #339933;">::</span><span style="color: #004000;">post</span><span style="color: #009900;">&#40;</span><span style="color: white;">'/import'</span><span style="color: #339933;">,</span> <span style="color: white;">'App\Http\Controllers\ImportController@import'</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">-&gt;</span><span style="color: #004000;">name</span><span style="color: #009900;">&#40;</span><span style="color: white;">'import'</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">&nbsp;</div></li></ol></code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">This route will handle POST requests to the <code>/import</code> endpoint and call the import method on the <code>ImportController</code>.</p>

        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Create the ImportController</h3>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Now, we need to create the ImportController that will handle the CSV import. Run the following command in your terminal to create a new controller:</p>

        <div class="coding inverse-toggle px-5 pt-5 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
        <div class="mt-4 flex text-sm">php artisan <span class="text-white ml-2">make:controller ImportController</span></div>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Open the <code>ImportController.php</code> file and add the following code to define the import method:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
              <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #000000; font-weight: bold;">public</span> <span style="color: #000000; font-weight: bold;">function</span> import<span style="color: #009900;">&#40;</span>Request <span style="color: yellow;">$request</span><span style="color: #009900;">&#41;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&#123;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #b1b100;">if</span> <span style="color: #009900;">&#40;</span><span style="color: yellow;">$request</span><span style="color: #339933;">-&gt;</span><span style="color: #004000;">has</span><span style="color: #009900;">&#40;</span><span style="color: white;">'file'</span><span style="color: #009900;">&#41;</span><span style="color: #009900;">&#41;</span> <span style="color: #009900;">&#123;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: yellow;">$path</span> <span style="color: #339933;">=</span> <span style="color: yellow;">$request</span><span style="color: #339933;">-&gt;</span><span style="color: #990000;">file</span><span style="color: #009900;">&#40;</span><span style="color: white;">'file'</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">-&gt;</span><span style="color: #004000;">getRealPath</span><span style="color: #009900;">&#40;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: yellow;">$data</span> <span style="color: #339933;">=</span> <span style="color: #990000;">array_map</span><span style="color: #009900;">&#40;</span><span style="color: white;">'str_getcsv'</span><span style="color: #339933;">,</span> <span style="color: #990000;">file</span><span style="color: #009900;">&#40;</span><span style="color: yellow;">$path</span><span style="color: #009900;">&#41;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: yellow;">$headers</span> <span style="color: #339933;">=</span> <span style="color: yellow;">$data</span><span style="color: #009900;">&#91;</span><span style="color: #cc66cc;">0</span><span style="color: #009900;">&#93;</span><span style="color: #339933;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: yellow;">$csv_data</span> <span style="color: #339933;">=</span> <span style="color: #990000;">array_slice</span><span style="color: #009900;">&#40;</span><span style="color: yellow;">$data</span><span style="color: #339933;">,</span> <span style="color: #cc66cc;">1</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #b1b100;">return</span> view<span style="color: #009900;">&#40;</span><span style="color: white;">'imported-data'</span><span style="color: #339933;">,</span> <span style="color: #990000;">compact</span><span style="color: #009900;">&#40;</span><span style="color: white;">'csv_data'</span><span style="color: #339933;">,</span> <span style="color: white;">'headers'</span><span style="color: #009900;">&#41;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #009900;">&#125;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #009900;">&#125;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">&nbsp;</div></li></ol></code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">This code checks if the request contains a file and reads the contents of the file into an array. It then extracts the header row (assuming the first row contains the column headers) and stores it in the $headers variable. The remaining data is stored in the $csv_data variable. Finally, the method returns a view called imported-data and passes in the $csv_data and $headers variables.</p>


        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Create a form to upload the CSV file</h3>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Next, we need to create a form that allows users to upload a CSV file to our application. Create and Open the resources/views/import.blade.php file and replace its contents with the following code:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
             <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #339933;">&lt;!</span>DOCTYPE html<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #339933;">&lt;</span>html<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;</span>head<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #339933;">&lt;</span>title<span style="color: #339933;">&gt;</span>Laravel CSV Import Example<span style="color: #339933;">&lt;/</span>title<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;/</span>head<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;</span>body<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #339933;">&lt;</span>form action<span style="color: #339933;">=</span><span style="color: white;">&quot;/import&quot;</span> method<span style="color: #339933;">=</span><span style="color: white;">&quot;POST&quot;</span> enctype<span style="color: #339933;">=</span><span style="color: white;">&quot;multipart/form-data&quot;</span><span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #339933;">@</span>csrf</div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #339933;">&lt;</span>input type<span style="color: #339933;">=</span><span style="color: white;">&quot;file&quot;</span> name<span style="color: #339933;">=</span><span style="color: white;">&quot;file&quot;</span><span style="color: #339933;">&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #339933;">&lt;</span>button type<span style="color: #339933;">=</span><span style="color: white;">&quot;submit&quot;</span><span style="color: #339933;">&gt;</span>Import CSV<span style="color: #339933;">&lt;/</span>button<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #339933;">&lt;/</span>form<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;/</span>body<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #339933;">&lt;/</span>html<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">&nbsp;</div></li></ol></code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">This code creates a simple form that allows users to select a file to upload. When the form is submitted, it sends a POST request to the /import endpoint and includes the selected file.</p>

        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Create a view to display the imported data</h3>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Finally, we need to create a view that will display the imported data. Create a new file called `imported-data.blade with the following code:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
             <code class="php p-12" style="font-family:monospace;"><ol><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #339933;">&lt;!</span>DOCTYPE html<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #339933;">&lt;</span>html<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;</span>head<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #339933;">&lt;</span>title<span style="color: #339933;">&gt;</span>Imported CSV Data<span style="color: #339933;">&lt;/</span>title<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;/</span>head<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;</span>body<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #339933;">&lt;</span>h1<span style="color: #339933;">&gt;</span>Imported CSV Data<span style="color: #339933;">&lt;/</span>h1<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #339933;">&lt;</span>table<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #339933;">&lt;</span>thead<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #339933;">&lt;</span>tr<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #339933;">@</span><span style="color: #b1b100;">foreach</span> <span style="color: #009900;">&#40;</span><span style="color: yellow;">$headers</span> <span style="color: #b1b100;">as</span> <span style="color: yellow;">$header</span><span style="color: #009900;">&#41;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                        <span style="color: #339933;">&lt;</span>th<span style="color: #339933;">&gt;</span><span style="color: #009900;">&#123;</span><span style="color: #009900;">&#123;</span> <span style="color: yellow;">$header</span> <span style="color: #009900;">&#125;</span><span style="color: #009900;">&#125;</span><span style="color: #339933;">&lt;/</span>th<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #339933;">@</span><span style="color: #b1b100;">endforeach</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #339933;">&lt;/</span>tr<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #339933;">&lt;/</span>thead<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #339933;">&lt;</span>tbody<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #339933;">@</span><span style="color: #b1b100;">foreach</span> <span style="color: #009900;">&#40;</span><span style="color: yellow;">$csv_data</span> <span style="color: #b1b100;">as</span> <span style="color: yellow;">$row</span><span style="color: #009900;">&#41;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #339933;">&lt;</span>tr<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                        <span style="color: #339933;">@</span><span style="color: #b1b100;">foreach</span> <span style="color: #009900;">&#40;</span><span style="color: yellow;">$row</span> <span style="color: #b1b100;">as</span> <span style="color: yellow;">$cell</span><span style="color: #009900;">&#41;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                            <span style="color: #339933;">&lt;</span>td<span style="color: #339933;">&gt;</span><span style="color: #009900;">&#123;</span><span style="color: #009900;">&#123;</span> <span style="color: yellow;">$cell</span> <span style="color: #009900;">&#125;</span><span style="color: #009900;">&#125;</span><span style="color: #339933;">&lt;/</span>td<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                        <span style="color: #339933;">@</span><span style="color: #b1b100;">endforeach</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                    <span style="color: #339933;">&lt;/</span>tr<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">                <span style="color: #339933;">@</span><span style="color: #b1b100;">endforeach</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">            <span style="color: #339933;">&lt;/</span>tbody<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: bold; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">        <span style="color: #339933;">&lt;/</span>table<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">    <span style="color: #339933;">&lt;/</span>body<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;"><span style="color: #339933;">&lt;/</span>html<span style="color: #339933;">&gt;</span></div></li><li style="font-weight: normal; vertical-align:top;"><div style="font: normal normal 1em/1.2em monospace; margin:0; padding:0; background:none; vertical-align:top;">&nbsp;</div></li></ol></code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">This code uses a foreach loop to generate the table headers and rows dynamically based on the imported data. It assumes that the first row of the CSV file contains the column headers and that the remaining rows contain data.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">In conclusion, importing CSV files and displaying their contents in Laravel 10 is a straightforward process. By following the steps outlined in this tutorial, you can easily create a route, controller, and views that allow users to upload CSV files and view the data in a tabular format. This feature is especially useful for web applications that deal with large datasets or need to integrate with other systems that provide data in CSV format. We hope this tutorial has been helpful in guiding you through the process of CSV import in Laravel 10.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy your code journey...</p>

    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
