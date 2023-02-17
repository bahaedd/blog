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
                <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Full text search is an essential feature of many modern web applications. With the ability to search across large volumes of data, developers can create powerful search functionality that enhances the user experience and improves the overall effectiveness of their applications.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Laravel, provides built-in support for full text search. In this post, we'll explore how to use full text search in Laravel and provide two examples to help you get started.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">To get started, I suppose you have already set up a Laravel Application, and I will provide you two ways for performing a full text search in Laravel</p>
        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Example 1 : use "MATCH AGAINST"</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Laravel, a popular PHP web framework, provides built-in support for full text search through the use of the MySQL <span class="text-green-400">"MATCH AGAINST"</span> </p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">To use full text search in Laravel, you'll need to have a MySQL database with a FULLTEXT index on one or more columns. The FULLTEXT index enables MySQL to perform efficient full text searches on the specified columns. Once you have a database with a FULLTEXT index, you can use the MATCH AGAINST operator in your Laravel application to perform full text searches.</p>
        
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">To perform a full text search in Laravel, you can use the whereRaw method to add a MATCH AGAINST clause to your query. Here's an example</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400 text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>$searchTerm = 'example';</p>
                    <p></p>
                    <p>$results = DB::table('articles')</p>
                    <p>    ->select('*')</p>
                    <p>    ->whereRaw("MATCH(title, body) AGAINST(? IN BOOLEAN MODE)", [$searchTerm])</p>
                    <p>    ->get();</p>
                </pre>  
        </div>

        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Example 2 : use the "nicolaslopezj/searchable" package</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">The nicolaslopezj/searchable package is a powerful tool for implementing full text search in Laravel applications. By providing a simple and intuitive API, the package enables developers to easily add full text search functionality to their Laravel applications.</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">To get started with the nicolaslopezj/searchable package, you'll need to add it to your Laravel project using Composer. Here's the command you'll need to run:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> composer require nicolaslopezj/searchable</div>
        </div>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Once you've added the package to your project, you can start using its functionality to implement full text search in your application.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">To implement full text search with the nicolaslopezj/searchable package, you'll need to add a searchable trait to your model and specify the columns you want to search on. Here's how you can do it:</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>use Nicolaslopezj\Searchable\SearchableTrait;</p>
                    <p></p>
                    <p>class Article extends Model</p>
                    <p>{</p>
                    <p>    use SearchableTrait;</p>
                    <p></p>
                    <p>    protected $searchable = [</p>
                    <p>        'columns' => [</p>
                    <p>            'title' => 10,</p>
                    <p>            'body' => 5,</p>
                    <p>        ],</p>
                    <p>    ];</p>
                    <p>}</p>
                </pre>  
        </div>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">We're adding the searchable trait to our Article model and specifying the title and body columns as searchable. We're also assigning weights to each column to control the relevance of the search results.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">To perform a search using the searchable trait, you can use the search method on your model.</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>$searchTerm = 'example';</p>
                    <p></p>
                    <p>$results = Article::search($searchTerm)->get();</p>
                </pre>  
        </div>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">In this post, we've explored different ways to implement full text search in Laravel applications. We've covered some of the built-in tools and techniques that Laravel provides, as well as some third-party packages that offer more advanced functionality.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">One of the easiest ways to implement full text search in Laravel is to use Laravel's built-in query builder and the LIKE operator. This approach is simple and effective, but it may not be the best choice for large or complex applications.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Another option is to use Laravel Scout, a full-text search package that provides a simple and powerful API for searching your models. Scout offers support for Elasticsearch, Algolia, and other search engines, making it a versatile option for a wide range of applications.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Finally, we explored the nicolaslopezj/searchable package, which provides a flexible and intuitive API for implementing full text search in Laravel. This package is particularly useful for applications that require more advanced search functionality or need to search across multiple models.</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Ultimately, the best approach to implementing full text search in your Laravel application will depend on your specific needs and requirements. By understanding the different options available and their strengths and weaknesses, you can make an informed decision that will help you build a robust and effective search functionality that meets your users' needs.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy Laravel...</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
