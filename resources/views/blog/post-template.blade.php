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
            <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">Laravel Eloquent is a powerful and easy-to-use Object-Relational Mapping (ORM) system built into the Laravel PHP framework. With Eloquent, developers can define database tables as classes and interact with them using object-oriented syntax. This makes it easy to work with data and create database-driven applications without having to write complex SQL queries. In this article, we'll explore the features of Eloquent and how it can simplify database interactions for Laravel developers.</p>
        </blockquote>
        <p class="pt-6 font-light text-grey-20 dark:text-white text-base">Eloquent is designed to work with multiple database systems, including MySQL, PostgreSQL, and SQL Server. This flexibility makes it a popular choice for web developers who need to work with a variety of databases.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">One of the main benefits of using Eloquent is its ease of use. Eloquent allows developers to interact with databases using familiar object-oriented concepts like models, relationships, and queries. This makes it easy to work with data and create database-driven applications without having to write complex SQL queries.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">To get started with Eloquent, developers define database tables as classes called models. A model represents a single table in the database and provides an interface for interacting with that table's data. Models typically define attributes, relationships, and methods for accessing and manipulating data.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">For example, consider a simple blog application that has a database table for posts. To define a Post model in Eloquent, a developer would create a new PHP class called Post and extend the Eloquent Model class:</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700 pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li><font color="orange">use</font>&nbsp;Illuminate\Database\Eloquent\Model<font color="#339933">;</font></li><li>&nbsp;</li><li><font color="orange">class</font>&nbsp;Post&nbsp;<font color="orange">extends</font>&nbsp;Model</li><li><font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">protected</font>&nbsp;<font color="red">$table</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="yellow">'posts'</font><font color="#339933">;</font></li><li><font color="#009900">&#125;</font></li><li>&nbsp;</li></ol></blockquote>
            </code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">In this example, the <code class="font-bold">$table</code> property specifies the name of the database table that the Post model represents. Once the model is defined, developers can use it to interact with the database using Eloquent's simple and expressive syntax.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">For example, to retrieve all posts from the database, a developer could use the following code:</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-light bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2 tracking-widest">$posts = Post::all();</span></div>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">This code uses the <code class="font-bold">all()</code> method provided by Eloquent to retrieve all rows from the posts table and return them as a collection of Post objects.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Eloquent also provides a rich set of methods for querying data, including <code class="font-bold">where()</code>, <code class="font-bold">orderBy()</code>, and <code class="font-bold">groupBy()</code>. These methods allow developers to build complex queries using a simple and expressive syntax.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">In addition to querying data, Eloquent also provides support for defining relationships between models. This allows developers to easily work with related data across multiple tables in the database.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">For example, consider a blog application where each post has one or more comments. To define a relationship between the Post and Comment models in Eloquent, a developer would add the following code to the Post model:</p>

        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
               <blockquote><ol><li><font color="orange">public</font>&nbsp;<font color="orange">function</font>&nbsp;comments<font color="#009900">&#40;</font><font color="#009900">&#41;</font></li><li><font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#b1b100">return</font>&nbsp;<font color="red">$this</font><font color="#339933">-&gt;</font><font color="white">hasMany</font><font color="#009900">&#40;</font>Comment<font color="#339933">::</font><font color="orange">class</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li><font color="#009900">&#125;</font></li><li>&nbsp;</li></ol></blockquote>
            </code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">This defines a "hasMany" relationship between the Post and Comment models, allowing to retrieve all comments for a given post using :</p>

        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
               <blockquote><ol><li><font color="yellow">$comments</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="yellow">$post</font><font color="#339933">-&gt;</font><font color="white">comments</font><font color="#339933">;</font></li></ol></blockquote>
            </code>
        </div>

       

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">This will return collections of posts that match the length criteria defined in each Query Scope.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Laravel Eloquent provides a powerful and easy-to-use ORM system for working with databases in PHP. Its simple and expressive syntax, support for multiple database systems, and rich set of features make it a popular choice for web developers who need to work with databases in their applications.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">By leveraging Eloquent, developers can focus on building their applications rather than worrying about the complexities of interacting with databases. Whether you're a seasoned Laravel developer or just getting started with the framework, Eloquent is a powerful tool that can help you create robust and efficient database-driven applications.</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
