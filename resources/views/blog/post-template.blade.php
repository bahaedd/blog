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
            <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">Laravel Sanctum and Laravel Passport are two of the most popular authentication packages for the Laravel PHP framework.</p>
        </blockquote>

        <p class="pt-6 font-light text-grey-20 dark:text-white text-base">While they may seem similar at first glance, there are some key differences between the two. In this article, we will explore those differences in detail and help you decide which one to use for your project.</p>

        <p class="pt-6 font-light text-grey-20 dark:text-white text-base">Firstly, let's talk about Laravel Passport. It is a full-featured <code class="font-bold">OAuth2</code> server implementation that allows you to authenticate users and issue access tokens. This package provides a complete API authentication system out of the box, making it an ideal choice for large-scale applications with many users. It also supports refresh tokens, which allows users to obtain new access tokens without requiring them to re-authenticate.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">On the other hand, Laravel Sanctum is a lightweight package that is designed to be simple and easy to use. It provides a way to authenticate APIs using tokens, but it does not have all the features that Laravel Passport has. Unlike Laravel Passport, it does not support refresh tokens, which means that users will need to re-authenticate to obtain a new access token once the current one expires.</p>

        
        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">One of the biggest differences between Laravel Sanctum and Laravel Passport is the way they handle authentication. Laravel Passport uses OAuth2, which is a widely-used standard for API authentication. This makes it easy to integrate with other APIs that also use OAuth2. Laravel Sanctum, on the other hand, uses a token-based authentication system that is simpler and more lightweight. This makes it easier to use and more suitable for smaller applications.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">Another difference between the two packages is the way they handle token revocation. Laravel Passport has built-in support for revoking access tokens, which allows you to revoke a token if it is compromised or no longer needed. Laravel Sanctum, on the other hand, does not have built-in support for token revocation. However, you can implement token revocation yourself by manually deleting the token from the database.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">In terms of installation and configuration, Laravel Sanctum is easier to set up than Laravel Passport. It requires minimal configuration and can be up and running in just a few minutes. Laravel Passport, on the other hand, requires more configuration and may take longer to set up.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">So, which package should you use for your project? It depends on your requirements. If you need a full-featured API authentication system with support for refresh tokens and token revocation, Laravel Passport is the way to go. However, if you are looking for a lightweight and easy-to-use package for token-based authentication, Laravel Sanctum is the better choice.</p>

        <p class="pt-6 font-light leading-relaxed text-grey-20 dark:text-white text-base">In conclusion, Laravel Sanctum and Laravel Passport are two great packages for API authentication in Laravel. While they share some similarities, they also have some key differences that make them better suited for different types of applications. I hope that this article has helped you understand those differences and make an informed decision about which package to use for your project.</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
