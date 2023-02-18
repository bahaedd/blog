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
                <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Are you tired of creating multiple login credentials for different websites? If yes, then implementing social media login in your Laravel application can be a great solution. In this tutorial, we will show you how to implement social media login in Laravel using the Socialite package.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">To get started, I suppose you have already set up a Laravel Application, and I will show you how to implement Social Media Login</p>
        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 1 : install JetStream</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Jetstream is a new official package for Laravel that provides a starting point for building modern applications . It provides a pre-built authentication system, a dashboard with account management features, and a flexible way to add additional features and components.</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">So for that we need to install it by runing the following command:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> composer require laravel/jetstream</div>
        </div>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white"> we need to create the authentication system, for that run the command bellow</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan jetstream:install livewire</div>
        </div>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white"> for node the package and run it, execute the command</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> npm install && npm run dev</div>
        </div>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white"> Then, create the database tables:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan migrate</div>
        </div>
        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 2 : install Socialite</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Socialite is an official Laravel package that makes it easy to integrate with OAuth authentication providers, such as Facebook, Twitter, provider, and LinkedIn. It provides a simple, consistent interface for interacting with OAuth authentication providers, making it easy to authenticate users through third-party services in Laravel applications.</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white"> To install it run:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> composer require laravel/socialite</div>
        </div>
        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 3 : Create Social Media Apps</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Before you can use social media login, you need to create apps for each social media platform you want to use. Here are the links to create apps for some popular platforms:
            <ul>
                <li><a target="_blank" href="https://developers.facebook.com/apps/" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Facebook: https://developers.facebook.com/apps/</a></li>
                <li><a target="_blank" href="https://developer.twitter.com/en/apps" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Twitter: https://developer.twitter.com/en/apps</a></li>
                <li><a target="_blank" href="https://console.developers.provider.com/" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">provider: https://console.developers.provider.com/</a></li>
                <li><a target="_blank" href="https://www.linkedin.com/developers/" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">LinkedIn: https://www.linkedin.com/developers/</a></li>
            </ul>  
        </p>        
         <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Once you have created the apps, make sure to note down the client ID and client secret, which you will need later.</p>
         <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 4 : Configure Services</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Next, you need to configure the services you want to use in your Laravel application. Open the <code>config/services.php</code> file and add the following code:</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-green-400 text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>'facebook' => [</p>
                    <p>    'client_id' => env('FACEBOOK_CLIENT_ID'),</p>
                    <p>    'client_secret' => env('FACEBOOK_CLIENT_SECRET'),</p>
                    <p>    'redirect' => env('FACEBOOK_CALLBACK_URL'),</p>
                    <p>],</p>
                    <p>'twitter' => [</p>
                    <p>    'client_id' => env('TWITTER_CLIENT_ID'),</p>
                    <p>    'client_secret' => env('TWITTER_CLIENT_SECRET'),</p>
                    <p>    'redirect' => env('TWITTER_CALLBACK_URL'),</p>
                    <p>],</p>
                    <p>'provider' => [</p>
                    <p>    'client_id' => env('provider_CLIENT_ID'),</p>
                    <p>    'client_secret' => env('provider_CLIENT_SECRET'),</p>
                    <p>    'redirect' => env('provider_CALLBACK_URL'),</p>
                    <p>],</p>
                </pre>  
        </div>

        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 5 :  Add Routes && Create SocialController</p>
        
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">After configuring the services, add the necessary routes to your application's <code>routes/web.php</code> file:</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>Route::get('/auth/{provider}', 'Auth\SocialController@redirect');</p>
                    <p>Route::get('/auth/{provider}/callback', 'Auth\SocialController@callback');</p>
                </pre>  
        </div>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Create a SocialController by running the following command:</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan make:controller Auth/SocialController</div>
        </div>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Then, add the following logic to the SocialController:</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>namespace App\Http\Controllers\Auth;</p>
                    <p></p>
                    <p>use App\Http\Controllers\Controller;</p>
                    <p>use Illuminate\Http\Request;</p>
                    <p>use Socialite;</p>
                    <p></p>
                    <p class="text-green-400">class SocialController extends Controller</p>
                    <p class="text-green-400">{</p>
                    <p class="text-red-400">    public function redirect($provider)</p>
                    <p class="text-red-400">    {</p>
                    <p>        return Socialite::driver($provider)->redirect();</p>
                    <p class="text-red-400">    }</p>
                    <p></p>
                    <p class="text-red-400">    public function callback($provider)</p>
                    <p class="text-red-400">    {</p>
                    <p>        $user = Socialite::driver($provider)->user();</p>
                    <p></p>
                    <p class="text-red-400">try {</p>
                    <p>            $user = Socialite::driver('provider')->user();</p>
                    <p>            $finduser = User::where('provider_id', $user->id)->first();</p>
                    <p class="text-red-400">            if($finduser){</p>
                    <p>                Auth::login($finduser);</p>
                    <p>                return redirect()->intended('dashboard');</p>
                    <p>         </p>
                    <p class="text-red-400">            }else{</p>
                    <p>                $newUser = User::updateOrCreate(['email' => $user->email],[</p>
                    <p>                        'name' => $user->name,</p>
                    <p>                        'provider_id'=> $user->id,</p>
                    <p>                        'password' => encrypt('password')</p>
                    <p>                    ]);</p>
                    <p>                Auth::login($newUser);</p>
                    <p>                return redirect()->intended('dashboard');</p>
                    <p class="text-red-400">            }</p>
                    <p class="text-red-400">        } catch (Exception $e) {</p>
                    <p>            dd($e->getMessage());</p>
                    <p class="text-red-400">        }</p>
                    <p class="text-red-400">    }</p>
                    <p class="text-red-400">    }</p>
                    <p class="text-green-400">}</p>
                    <p></p>
                </pre>  
        </div>

        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 6 :  Add Database Column && Update the User Model</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">we have to create migration for add provider_id in your user table. So let's run bellow command::</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan make:migration add_provider_id_column</div>
        </div>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Update the migration :</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>public function up()</p>
                    <p>    {</p>
                    <p>        Schema::table('users', function ($table) {</p>
                    <p>            $table->string('provider_id')->nullable();</p>
                    <p>        });</p>
                    <p>    }</p>
                </pre>  
        </div>
        
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">and run :</p>
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan migrate</div>
        </div>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Then update the User Model :</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">add the 'provider_id' to the attributes that are mass assignable.  :</p>
        <!-- code source -->
        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p> protected $fillable = [</p>
                    <p>        'name',</p>
                    <p>        'email',</p>
                    <p>        'password',</p>
                    <p>        'provider_id'</p>
                    <p>    ];</p>
                </pre>  
        </div>
        

        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 7 :  Update .env File</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">update the .env file with the client ID, client secret, and callback URL for each social media platform:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>FACEBOOK_CLIENT_ID=your-client-id</p>
                    <p>FACEBOOK_CLIENT_SECRET=your-client-secret</p>
                    <p>FACEBOOK_CALLBACK_URL=http://your-app-url/auth/facebook/callback</p>
                    <p></p>
                    <p>TWITTER_CLIENT_ID=your-client-id</p>
                    <p>TWITTER_CLIENT_SECRET=your-client-secret</p>
                    <p>TWITTER_CALLBACK_URL=http://your-app-url/auth/twitter/callback</p>
                    <p></p>
                    <p>GOOGLE_CLIENT_ID=your-client-id</p>
                    <p>GOOGLE_CLIENT_SECRET=your-client-secret</p>
                    <p>GOOGLE_CALLBACK_URL=http://your-app-url/auth/likedin/callback</p>
                    <p></p>
                    <p></p>
                    <p>LINKEDIN_CLIENT_ID=your-client-id</p>
                    <p>LINKEDIN_CLIENT_SECRET=your-client-secret</p>
                    <p>LINKEDIN_CALLBACK_URL=http://your-app-url/auth/likedin/callback</p>
                </pre>  
        </div>
        <h6 class="pt-6 font-body leading-relaxed text-blue-400">Step 8 :  Add the link to login blade</p>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">The last thing to do is to update <code> resources/views/auth/login.blade.php</code></p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Add a link or button to your application that allows users to initiate the OAuth flow for the social network you want to integrate with. For example, to initiate the Google OAuth flow, you could add a link like this:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-blue-400  text-sm bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>Route::get('/auth/google', 'Auth\SocialController@redirect');</p>
                    <p>Route::get('/auth/google/callback', 'Auth\SocialController@callback');</p>
                </pre>  
        </div>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Finally, go ahead and run your application:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan serve</div>
        </div>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">and Go to your web browser, type the given URL and view the app output:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-bold subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">http://localhost:8000/login</span></div>
        </div>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">And that's it! With these steps, you should be able to implement Social Login in your Laravel application using the Socialite package.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy your code journey...</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
