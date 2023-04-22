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
        
        <blockquote class="p-4 my-4 border-l-4 border-gray-300 bg-gray-50 dark:border-gray-500 dark:bg-gray-800">
    <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">In Laravel's Eloquent ORM, Query Scopes are a powerful feature that allows you to define reusable query constraints for your models. Query Scopes can be used to filter models based on specific criteria in multiple places throughout your application.</p>
</blockquote>
        <p class="pt-6 font-light text-grey-20 dark:text-white text-base">In this tutorial, we will learn how to create Query Scopes in Laravel and use them to filter a sample Post model based on content length.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">To get started, let's create a new Laravel project and a simple "Post" model:</p>
        
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-semibold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2">php artisan make:model Post -m</span></div>
        </div>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">This will create a new Post model class and a migration file for the posts table.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Now, let's add some fields to the posts table in the migration file:</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li>Schema<font color="#339933">::</font><font color="white">create</font><font color="#009900">&#40;</font><font color="yellow">'posts'</font><font color="#339933">,</font>&nbsp;<font color="orange">function</font>&nbsp;<font color="#009900">&#40;</font>Blueprint&nbsp;<font color="red">$table</font><font color="#009900">&#41;</font>&nbsp;<font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">$table</font><font color="#339933">-&gt;</font><font color="white">id</font><font color="#009900">&#40;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">$table</font><font color="#339933">-&gt;</font><font color="white">string</font><font color="#009900">&#40;</font><font color="yellow">'title'</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">$table</font><font color="#339933">-&gt;</font><font color="white">text</font><font color="#009900">&#40;</font><font color="yellow">'content'</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">$table</font><font color="#339933">-&gt;</font><font color="white">timestamps</font><font color="#009900">&#40;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li><font color="#009900">&#125;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;</li></ol></blockquote>
            </code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Next, let's add some sample data to the posts table by running the migration and creating a seeder:</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-semibold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2">php artisan migrate</span></div>
            <div class="mt-1 flex text-sm"><span class="text-white ml-2">php artisan make:seeder PostSeeder</span></div>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">This will create a new Post model class and a migration file for the posts table.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">In the <code>database/seeders/PostSeeder.php</code> file, add the following code to create some sample posts:</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
               <blockquote><ol><li><font color="orange">use</font>&nbsp;Illuminate\Database\Seeder<font color="#339933">;</font></li><li><font color="orange">use</font>&nbsp;App\Models\Post<font color="#339933">;</font></li><li>&nbsp;</li><li><font color="orange">class</font>&nbsp;PostSeeder&nbsp;<font color="orange">extends</font>&nbsp;Seeder</li><li><font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">public</font>&nbsp;<font color="orange">function</font>&nbsp;run<font color="#009900">&#40;</font><font color="#009900">&#41;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post<font color="#339933">::</font><font color="white">create</font><font color="#009900">&#40;</font><font color="#009900">&#91;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">'title'</font>&nbsp;<font color="#339933">=&gt;</font>&nbsp;<font color="yellow">'First&nbsp;post'</font><font color="#339933">,</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">'content'</font>&nbsp;<font color="#339933">=&gt;</font>&nbsp;<font color="yellow">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.'</font><font color="#339933">,</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#009900">&#93;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post<font color="#339933">::</font><font color="white">create</font><font color="#009900">&#40;</font><font color="#009900">&#91;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">'title'</font>&nbsp;<font color="#339933">=&gt;</font>&nbsp;<font color="yellow">'Second&nbsp;post'</font><font color="#339933">,</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">'content'</font>&nbsp;<font color="#339933">=&gt;</font>&nbsp;<font color="yellow">'Sed&nbsp;do&nbsp;eiusmod&nbsp;tempor&nbsp;incididunt&nbsp;ut&nbsp;labore&nbsp;et&nbsp;dolore&nbsp;magna&nbsp;aliqua.'</font><font color="#339933">,</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#009900">&#93;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post<font color="#339933">::</font><font color="white">create</font><font color="#009900">&#40;</font><font color="#009900">&#91;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">'title'</font>&nbsp;<font color="#339933">=&gt;</font>&nbsp;<font color="yellow">'Third&nbsp;post'</font><font color="#339933">,</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="yellow">'content'</font>&nbsp;<font color="#339933">=&gt;</font>&nbsp;<font color="yellow">'Ut&nbsp;enim&nbsp;ad&nbsp;minim&nbsp;veniam,&nbsp;quis&nbsp;nostrud&nbsp;exercitation&nbsp;ullamco&nbsp;laboris&nbsp;nisi&nbsp;ut&nbsp;aliquip&nbsp;ex&nbsp;ea.'</font><font color="#339933">,</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#009900">&#93;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#009900">&#125;</font></li><li><font color="#009900">&#125;</font></li><li>&nbsp;</li></ol></blockquote>
            </code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Finally, run the seeder to populate the posts table:</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-semibold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2">php artisan db:seed --class=PostSeeder</span></div>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Now that we have some data, let's create a Query Scope on our Post model. In this example, we'll create a Query Scope to filter posts based on their length.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Add the following method to the Post model:</p>

        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
               <blockquote><ol><li><font color="orange">public</font>&nbsp;<font color="orange">function</font>&nbsp;scopeLength<font color="#009900">&#40;</font><font color="red">$query</font><font color="#339933">,</font>&nbsp;<font color="red">$length</font><font color="#009900">&#41;</font></li><li><font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#b1b100">return</font>&nbsp;<font color="red">$query</font><font color="#339933">-&gt;</font><font color="white">whereRaw</font><font color="#009900">&#40;</font><font color="yellow">'length(content)'</font>&nbsp;<font color="#339933">.</font>&nbsp;<font color="red">$length</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li><font color="#009900">&#125;</font></li><li>&nbsp;</li></ol></blockquote>
            </code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Here, we've defined a Query Scope named length. The length Query Scope takes an argument $length, which will be used to determine the length of the content. This Query Scope returns posts with content that matches the length criteria.</p>


        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">To use the 'length' Query Scope, we can call it on the Post model like this:</p>

        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
               <blockquote><ol><li><font color="orange">$shortPosts</font>&nbsp;<font color="#339933">=</font>&nbsp;Post<font color="#339933">::</font><font color="white">length</font><font color="#009900">&#40;</font><font color="red">'&lt;&nbsp;50'</font><font color="#009900">&#41;</font><font color="#339933">-&gt;</font><font color="white">get</font><font color="#009900">&#40;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li><font color="orange">$longPosts</font>&nbsp;<font color="#339933">=</font>&nbsp;Post<font color="#339933">::</font><font color="white">length</font><font color="#009900">&#40;</font><font color="red">'&gt;=&nbsp;50'</font><font color="#009900">&#41;</font><font color="#339933">-&gt;</font><font color="white">get</font><font color="#009900">&#40;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;</li></ol></blockquote>
            </code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">This will return collections of posts that match the length criteria defined in each Query Scope.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">In this tutorial, we learned how to create Query Scopes in Laravel's Eloquent ORM and use them to filter a sample Post model based on content length. Query Scopes are a powerful tool for filtering models based on common criteria. By defining query constraints in a Query Scope, you can avoid code duplication and keep your code DRY. </p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">With this knowledge, you can start using Query Scopes to optimize your queries and streamline your Laravel applications. Query Scopes are flexible and can be used for a variety of purposes. They are a great way to make your code more maintainable and reusable. I hope this tutorial has helped you understand how to create Query Scopes in Laravel's Eloquent ORM and how to use them effectively. Happy coding!</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
