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
        <p class="pt-6 font-light text-grey-20 dark:text-white text-base">Tall Stack is a full-stack web development technology stack that consists of Tailwind CSS, Alpine.js, Laravel, and Livewire. It offers a seamless web development experience by providing an easy-to-use, modern, and flexible toolset that allows developers to build high-quality web applications efficiently.</p>
        <p class="pt-6 font-light text-grey-20 dark:text-white text-base">In this article, we will explore the components of the Tall Stack and guide you on how to set up a Tall Stack project.</p>
        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Components of the Tall Stack</h3>
        <h4 class="pt-6 font-light leading-relaxed text-blue-500">TailwindCSS</h4>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">Tailwind CSS is a utility-first CSS framework that offers a set of pre-defined classes that you can use to style your HTML elements. It enables you to create responsive and customizable UI components without writing any CSS code. Tailwind CSS is highly flexible and can be customized according to your project needs.</p>
        <h4 class="pt-6 font-light leading-relaxed text-blue-500">Alpine.js</h4>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">Alpine.js is a lightweight JavaScript framework that offers a declarative syntax for building dynamic web applications. It allows you to add interactivity to your HTML elements without requiring complex JavaScript code. Alpine.js is designed to work seamlessly with Tailwind CSS and Laravel.</p>
        <h4 class="pt-6 font-light leading-relaxed text-blue-500">Laravel</h4>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">Laravel is a popular PHP framework that offers a set of tools and features for building robust and scalable web applications. It provides an elegant syntax for writing PHP code, and its modular structure enables you to build complex applications with ease. Laravel offers a range of features such as routing, middleware, database migrations, and authentication.</p>
        <h4 class="pt-6 font-light leading-relaxed text-blue-500">Livewire</h4>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">Livewire is a front-end framework that enables you to build dynamic web applications using Laravel's back-end features. It offers a reactive programming model that allows you to build real-time user interfaces without using JavaScript. Livewire integrates seamlessly with Tailwind CSS and Alpine.js, enabling you to build powerful UI components with ease.</p>
        <h3 class="pt-6 font-light leading-relaxed text-blue-700">#Setting up a Tall Stack project</h3>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">To set up a Tall Stack project, you need to follow these steps:</p>
        <h5 class="pt-6 font-light leading-relaxed text-blue-500">Step 1: Install Laravel</h5>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">To install Laravel, you need to have PHP installed on your system. You can download and install PHP from the official PHP website. Once you have PHP installed, you can use Composer to install Laravel.</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm">composer <span class="text-white ml-2">create-project --prefer-dist laravel/laravel tall-stack-app</span></div>
        </div>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">This command will create a new Laravel project called "tall-stack-app" in the current directory.</p>
        <h5 class="pt-6 font-light leading-relaxed text-blue-500">Step 2: Install Tailwind CSS and Alpine.js</h5>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">To install Tailwind CSS and Alpine.js, you can use the following command:</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2">npm install tailwindcss alpinejs</span></div>
        </div>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">This command will install Tailwind CSS and Alpine.js in your project's node_modules directory.</p>
        <h5 class="pt-6 font-light leading-relaxed text-blue-500">Step 3: Configure Tailwind CSS</h5>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">To configure Tailwind CSS, you need to create a new configuration file called "tailwind.config.js" in the root directory of your project. You can use the following command to create this file:</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2">npx tailwindcss init</span></div>
        </div>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">This command will create a new Tailwind CSS configuration file with the default settings.</p>
        <h5 class="pt-6 font-light leading-relaxed text-blue-500">Step 4: Configure Alpine.js</h5>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">To configure Alpine.js, you need import alpine.js in your project's <code>app.js</code> file:</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-green-700 ml-2">import 'alpinejs'</span></div>
        </div>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">This code will import the Alpine.js library into your project.</p>
        <h5 class="pt-6 font-light leading-relaxed text-blue-500">Step 5: Install Livewire</h5>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">To install Livewire, you can use the following command:</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm">composer<span class="text-white ml-2">require livewire/livewire</span></div>
        </div>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Now that we have Livewire installed let's create a Livewire component, to do so you need to run the following command:</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm">php artisan<span class="text-white ml-2">make:livewire counter</span></div>
        </div>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">This command will create a new Livewire component called "Counter" in your project's "app/Http/Livewire" directory.</p>
        <h5 class="pt-6 font-light leading-relaxed text-blue-500">Step 6: Build your UI using Tailwind CSS and Alpine.js</h5>
        <p class="pt-3 font-light leading-relaxed text-grey-20 dark:text-white text-base">To build your UI, you can use Tailwind CSS and Alpine.js to create responsive and interactive components. For example, you can create a simple counter component that increments or decrements a value:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-red-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12 mb-12">
            <code class="php p-12" style="font-family:monospace;">
                <blockquote>
                    <ol>
                        <li>
                            <font color="#339933">&lt;</font>div&nbsp;x<font color="#339933">-</font>data<font color="#339933">=</font>
                            <font color="yellow">&quot;{&nbsp;count:&nbsp;0&nbsp;}&quot;</font>
                            <font color="#339933">&gt;</font>
                        </li>
                        <li>&nbsp;&nbsp;<font color="#339933">&lt;</font>button&nbsp;<font color="#339933">@</font>click<font color="#339933">=</font>
                            <font color="yellow">&quot;count--&quot;</font>
                            <font color="#339933">&gt;-&lt;/</font>button<font color="#339933">&gt;</font>
                        </li>
                        <li>&nbsp;&nbsp;<font color="#339933">&lt;</font>span&nbsp;x<font color="#339933">-</font>text<font color="#339933">=</font>
                            <font color="yellow">&quot;count&quot;</font>
                            <font color="#339933">&gt;&lt;/</font>span<font color="#339933">&gt;</font>
                        </li>
                        <li>&nbsp;&nbsp;<font color="#339933">&lt;</font>button&nbsp;<font color="#339933">@</font>click<font color="#339933">=</font>
                            <font color="yellow">&quot;count++&quot;</font>
                            <font color="#339933">&gt;+&lt;/</font>button<font color="#339933">&gt;</font>
                        </li>
                        <li>
                            <font color="#339933">&lt;/</font>div<font color="#339933">&gt;</font>
                        </li>
                    </ol>
                </blockquote>
            </code>
        </div>
        <h5 class="pt-6 font-light leading-relaxed text-blue-500">Step 7: Run your app</h5>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">To start the development server, you can use the following command:</p>
        <div class="coding inverse-toggle px-6 pt-6 shadow-lg text-blue-700 font-bold subpixel-antialiased bg-gray-700  pb-6 rounded-lg leading-normal overflow-hidden mt-12">
            <div class="mt-1 flex text-sm"><span class="text-white ml-2">php artisan serve</span></div>
        </div>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">To test your application, open your web browser and navigate to http://localhost:8000. You should see the counter component that you created earlier, which should allow you to increment or decrement a value.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">In summary, the Tall Stack is a powerful web development technology stack that offers a range of features for building high-quality web applications. With its easy-to-use toolset, developers can create dynamic and interactive user interfaces with ease. By following the steps outlined in this article, you can set up a Tall Stack project and start building your own web applications.</p>
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy your code journey...</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
