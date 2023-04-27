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
            <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">A One to One Relationship is a type of database relationship where each record in one table is related to only one record in another table.</p>
        </blockquote>
        <p class="pt-6 font-light text-grey-20 dark:text-white text-base">In Laravel, you can define a One to One Relationship between two models by using Eloquent ORM.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Let's create a One to One Relationship in Laravel:</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">First, create a migration for the parent table. This table will have a primary key and other columns that store information about the record. For example, if you are creating a One to One Relationship between a User and a Profile, you could create a migration for the User table like this:</p>

        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-light bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2 tracking-widest">php artisan make:migration create_users_table --create=users</span></div>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Next, create a migration for the child table. This table will have a foreign key that references the primary key of the parent table. For example, if you are creating a One to One Relationship between a User and a Profile, you could create a migration for the Profile table like this:</p>

        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-light bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2 tracking-widest">php artisan make:migration create_profiles_table --create=profiles</span></div>
        </div>
        
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">After creating the migrations, you will need to define the Eloquent models for the two tables. To create a One to One Relationship, you will need to add a method to each model that defines the relationship. for the <code class="font-bold">User</code> Model:</p>

        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700 pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li><font color="orange">class</font>&nbsp;User&nbsp;<font color="orange">extends</font>&nbsp;Model</li><li><font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">public</font>&nbsp;<font color="orange">function</font>&nbsp;profile<font color="#009900">&#40;</font><font color="#009900">&#41;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#b1b100">return</font>&nbsp;<font color="red">$this</font><font color="#339933">-&gt;</font><font color="white">hasOne</font><font color="#009900">&#40;</font>Profile<font color="#339933">::</font><font color="orange">class</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#009900">&#125;</font></li><li><font color="#009900">&#125;</font></li></ol></blockquote>
            </code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">This defines a One to One Relationship between the User and Profile models. The <code class="font-bold">hasOne</code> method is used to define the relationship. The first argument is the name of the related model (in this case, <code class="font-bold">Profile::class</code>), and the second argument is the foreign key column name (which will default to user_id).</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Next, you will need to define the relationship in the Profile model :</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700 pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li><font color="orange">class</font>&nbsp;Profile&nbsp;<font color="orange">extends</font>&nbsp;Model</li><li><font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">public</font>&nbsp;<font color="orange">function</font>&nbsp;user<font color="#009900">&#40;</font><font color="#009900">&#41;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#009900">&#123;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#b1b100">return</font>&nbsp;<font color="red">$this</font><font color="#339933">-&gt;</font><font color="white">belongsTo</font><font color="#009900">&#40;</font>User<font color="#339933">::</font><font color="orange">class</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;&nbsp;&nbsp;&nbsp;<font color="#009900">&#125;</font></li><li><font color="#009900">&#125;</font></li></ol></blockquote>
            </code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">This defines a One to One Relationship between the Profile and User models. The <code class="font-bold">belongsTo</code> method is used to define the relationship.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">After defining the migrations and models, you will need to migrate the database to create the tables:</p>

        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-light bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2 tracking-widest">php artisan migrate</span></div>
        </div>
        <h4 class="pt-6 font-light leading-relaxed text-blue-700">- Create a record</h4>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Now that you have defined the relationship and created the tables, you can create a record in the parent table and a corresponding record in the child table. For example, to create a new User and a corresponding Profile:</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700 pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li><font color="red">$user</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="orange">new</font>&nbsp;User<font color="#339933">;</font></li><li><font color="red">$user</font><font color="#339933">-&gt;</font><font color="white">name</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="yellow">'John&nbsp;Doe'</font><font color="#339933">;</font></li><li><font color="red">$user</font><font color="#339933">-&gt;</font><font color="white">email</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="yellow">'johndoe@example.com'</font><font color="#339933">;</font></li><li><font color="red">$user</font><font color="#339933">-&gt;</font><font color="white">save</font><font color="#009900">&#40;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li>&nbsp;</li><li><font color="red">$profile</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="orange">new</font>&nbsp;Profile<font color="#339933">;</font></li><li><font color="red">$profile</font><font color="#339933">-&gt;</font><font color="white">user_id</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="red">$user</font><font color="#339933">-&gt;</font><font color="white">id</font><font color="#339933">;</font></li><li><font color="red">$profile</font><font color="#339933">-&gt;</font><font color="white">bio</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="yellow">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet.'</font><font color="#339933">;</font></li><li><font color="red">$profile</font><font color="#339933">-&gt;</font><font color="white">save</font><font color="#009900">&#40;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li></ol></blockquote>
            </code>
        </div>

        <h4 class="pt-6 font-light leading-relaxed text-blue-700">- Retrieve a record</h4>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">To retrieve a record with its related record, you can use the with method to eager load the relationship. For example, to retrieve a User with its associated Profile:</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700 pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li><font color="red">$user</font>&nbsp;<font color="#339933">=</font>&nbsp;User<font color="#339933">::</font><font color="white">with</font><font color="#009900">&#40;</font><font color="yellow">'profile'</font><font color="#009900">&#41;</font><font color="#339933">-&gt;</font><font color="white">find</font><font color="#009900">&#40;</font><font color="#cc66cc">1</font><font color="#009900">&#41;</font><font color="#339933">;</font></li></ol></blockquote>
            </code>
        </div>

        <h4 class="pt-6 font-light leading-relaxed text-blue-700">- Accessing the related model</h4>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Once you have retrieved a record with its related record, you can access the related record by using the relationship name as a property on the parent model:</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700 pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li><font color="red">$user</font>&nbsp;<font color="#339933">=</font>&nbsp;User<font color="#339933">::</font><font color="white">with</font><font color="#009900">&#40;</font><font color="yellow">'profile'</font><font color="#009900">&#41;</font><font color="#339933">-&gt;</font><font color="white">find</font><font color="#009900">&#40;</font><font color="#cc66cc">1</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li><font color="red">$profile</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="red">$user</font><font color="#339933">-&gt;</font><font color="white">profile</font><font color="#339933">;</font></li></ol></blockquote>
            </code>
        </div>

        <h4 class="pt-6 font-light leading-relaxed text-blue-700">- Updating the related model</h4>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">To update the related model, you can simply update the properties on the related model and then save it. For example, to update the bio of the Profile that is related to a User:</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700 pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li><font color="red">$user</font>&nbsp;<font color="#339933">=</font>&nbsp;User<font color="#339933">::</font><font color="white">with</font><font color="#009900">&#40;</font><font color="yellow">'profile'</font><font color="#009900">&#41;</font><font color="#339933">-&gt;</font><font color="white">find</font><font color="#009900">&#40;</font><font color="#cc66cc">1</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li><font color="red">$profile</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="red">$user</font><font color="#339933">-&gt;</font><font color="white">profile</font><font color="#339933">;</font></li><li><font color="red">$profile</font><font color="#339933">-&gt;</font><font color="white">bio</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="yellow">'Updated&nbsp;bio'</font><font color="#339933">;</font></li><li><font color="red">$profile</font><font color="#339933">-&gt;</font><font color="white">save</font><font color="#009900">&#40;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li></ol></blockquote>
            </code>
        </div>

        <h4 class="pt-6 font-light leading-relaxed text-blue-700">- Deleting the related model</h4>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">To delete the related model, you can simply delete it. When you delete the related model, Laravel will automatically remove the foreign key constraint from the parent record. For example, to delete the Profile that is related to a User:</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700 pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li><font color="red">$user</font>&nbsp;<font color="#339933">=</font>&nbsp;User<font color="#339933">::</font><font color="white">with</font><font color="#009900">&#40;</font><font color="yellow">'profile'</font><font color="#009900">&#41;</font><font color="#339933">-&gt;</font><font color="white">find</font><font color="#009900">&#40;</font><font color="#cc66cc">1</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li><font color="red">$profile</font>&nbsp;<font color="#339933">=</font>&nbsp;<font color="red">$user</font><font color="#339933">-&gt;</font><font color="white">profile</font><font color="#339933">;</font></li><li><font color="red">$profile</font><font color="#339933">-&gt;</font><font color="white">delete</font><font color="#009900">&#40;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li></ol></blockquote>
            </code>
        </div>

        <h4 class="pt-6 font-light leading-relaxed text-blue-700">- Deleting the parent model</h4>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">To delete the parent model, you can simply delete it. When you delete the parent model, Laravel will automatically delete the related model as well. For example, to delete a User and its associated Profile:</p>
        <div class="coding inverse-toggle px-4 pt-4 shadow-lg text-red-400 text-sm bg-gray-700 pb-4 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote><ol><li><font color="red">$user</font>&nbsp;<font color="#339933">=</font>&nbsp;User<font color="#339933">::</font><font color="white">with</font><font color="#009900">&#40;</font><font color="yellow">'profile'</font><font color="#009900">&#41;</font><font color="#339933">-&gt;</font><font color="white">find</font><font color="#009900">&#40;</font><font color="#cc66cc">1</font><font color="#009900">&#41;</font><font color="#339933">;</font></li><li><font color="red">$user</font><font color="#339933">-&gt;</font><font color="white">delete</font><font color="#009900">&#40;</font><font color="#009900">&#41;</font><font color="#339933">;</font></li></ol></blockquote>
            </code>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">In this article, we covered the three types of service providers in Laravel: Application Service Providers, Route Service Providers, and Package Service Providers. We also looked at examples of how to register and use each type of service provider.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">If you're new to Laravel, it may take some time to get used to working with service providers. But once you understand how they work, you'll appreciate how much easier they make it to manage dependencies in your application.</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
