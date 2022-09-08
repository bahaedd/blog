    <ul class="space-y-1 mt-6 mb-6 max-w-md list-none list-inside text-dark dark:text-gray-400">
    <li><a href="#intro"># Introduction</a></li>
    <li><a href="#features"># Features</a></li>
    <li><a href="#setup"># Environment Setup</a></li>
    </ul>
    <h6 class="font-medium break-normal text-green-400 pt-6 pb-2 text-sm md:text-4xl"># Introduction</h6>
    <p id="intro" class="text-dark dark:text-white mt-6 mb-6">
        Vue.js (also simply called Vue), is an open-source JavaScript framework used to build user interfaces and single-page web applications. Vue was created by Evan You and is maintained by him and the rest of the active core team members working on the project and its ecosystem
    </p>
    <p class="text-dark dark:text-white mt-6 mb-6">
        VueJS focusses on the view layer. It can be easily integrated into big projects for front-end development without any issues.
    </p>
    <p class="text-dark dark:text-white mt-6 mb-6">
        It is very easy to integrate VueJS with other projects and libraries.
    </p>
    <p class="text-dark dark:text-white mt-6 mb-6">
        Vue.js is also known for its fast loading speed and easy scalability.
    </p>
    <h6 class="font-medium break-normal text-green-400 pt-6 pb-2 text-sm md:text-4xl"># Features</h6>
    <p id="features" class="text-dark dark:text-white mt-6 mb-6">
        <h4 class="pt-6 pb-2 text-md font-medium text-green-300">## Virtual DOM</h4>
        <p class="text-dark dark:text-white mt-6 mb-6">
            The Document Object Model, or DOM, is a kind of interface that treats all the markup language (your HTML) as connected nodes. It can be seen as an interface of objects for markup elements stored in a tree-like structure.
            The DOM is what allows us to write and change styles on elements, and even change elements themselves. This is done by adding, modifying, or deleting element tags or CSS styles in the head and body of a document because they are represented as nodes and objects. This is how the HTML DOM works — so why would Vue have another DOM?
        </p>
        <p class="text-dark dark:text-white mt-6 mb-6">
            The Vue.js virtual DOM builted to be a kind of abstraction of the traditional DOM; it is a “lite” version of the HTML DOM, but with superpowers. The virtual DOM is smarter, and so it finds a way to be more efficient than the traditional DOM.
        </p>
        <p class="text-dark dark:text-white mt-6 mb-6">
            in Vue The changes are not made to the DOM, instead a replica of the DOM is created which is present in the form of JavaScript data structures. Whenever any changes are to be made, they are made to the JavaScript data structures and the latter is compared with the original data structure. The final changes are then updated to the real DOM, which the user will see changing. This is good in terms of optimization, it is less expensive and the changes can be made at a faster rate.
        </p>
        <h6 class="pt-6 pb-2 text-md font-medium text-green-300">## Data Binding</h6>
        <p class="text-dark dark:text-white mt-6 mb-6">
            Data binding is a technique used to bind data sources from the provider and consumer together and synchronize them at the time of retrieval.
        </p>
        <p class="text-dark dark:text-white mt-6 mb-6">
            The data binding feature helps manipulate or assign values to HTML attributes (HTML Classes Binding), 
            change the style (style Binding), assign classes with the help of binding directive called v-bind available with VueJS.
        </p>
        <h6 class="pt-6 pb-2 text-md font-medium text-green-300">## Components</h6>
        <p class="text-dark dark:text-white mt-6 mb-6">
            Components allow us to split the UI into independent and reusable pieces, and think about each piece in isolation.
        </p>
        <p class="text-dark dark:text-white mt-6 mb-6">
            This is very similar to how we nest native HTML elements, but Vue implements its own component model that allow us to encapsulate custom content and logic in each component. Vue also plays nicely with native Web Components.
        </p>
        <h6 class="pt-6 pb-2 text-md font-medium text-green-300">## Event Handling</h6>
        <p class="text-dark dark:text-white mt-6 mb-6">
            v-on is the attribute added to the DOM elements to listen to the events in VueJS.
        </p>
        <h6 class="pt-6 pb-2 text-md font-medium text-green-300">## Animation/Transition</h6>
        <p class="text-dark dark:text-white mt-6 mb-6">
            VueJS provides various ways to apply transition to HTML elements when they are added/updated or removed from the DOM. VueJS has a built-in transition component that needs to be wrapped around the element for transition effect. We can easily add third party animation libraries and also add more interactivity to the interface.
        </p>
        <h6 class="pt-6 pb-2 text-md font-medium text-green-300">## Computed Properties</h6>
        <p class="text-dark dark:text-white mt-6 mb-6">
            This is one of the important features of VueJS. It helps to listen to the changes made to the UI elements and performs the necessary calculations. There is no need of additional coding for this.
        </p>
    </p>
    




        {{-- <div style="color: #d4d4d4; background-color: #374151; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre; padding: 20px;" class="rounded border-gray-200 dark:border-gray-600">
            <div class="text-center mb-3"><span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-2.5 rounded dark:bg-green-200 dark:text-green-900">app/Http/Kernel.php</span></div>
            <div><span style="color: #99c3e6;">&lt;?php</span></div>
            <br />
            <div><span style="color: #99c3e6;">namespace</span> <span style="color: #9de1d5;">App\Http</span>;</div>
            <br />
            <div><span style="color: #99c3e6;">use</span> Illuminate\Foundation\Http\<span style="color: #9de1d5;">Kernel</span> <span style="color: #99c3e6;">as</span> HttpKernel;</div>
            <br />
            <div><span style="color: #99c3e6;">class</span> <span style="color: #9de1d5;">Kernel</span> <span style="color: #99c3e6;">extends</span> <span style="color: #9de1d5;">HttpKernel</span></div>
            <div>{</div>
            <div>&nbsp; &nbsp; <span style="color: #b8d2ad;">/**</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* The application's global HTTP middleware stack.</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* These middleware are run during every request to your application.</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* </span><span style="color: #99c3e6;">@var</span> <span style="color: #99c3e6;">array</span><span style="color: #b8d2ad;">&lt;</span><span style="color: #99c3e6;">int</span><span style="color: #b8d2ad;">, class-string|string&gt;</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*/</span></div>
            <div>&nbsp; &nbsp; <span style="color: #99c3e6;">protected</span> <span style="color: #add5eb;">$middleware</span> = [</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #b8d2ad;">// \App\Http\Middleware\TrustHosts::class,</span></div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; \App\Http\Middleware\<span style="color: #9de1d5;">TrustProxies</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; \Fruitcake\Cors\<span style="color: #9de1d5;">HandleCors</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; \App\Http\Middleware\<span style="color: #9de1d5;">PreventRequestsDuringMaintenance</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; \Illuminate\Foundation\Http\Middleware\<span style="color: #9de1d5;">ValidatePostSize</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; \App\Http\Middleware\<span style="color: #9de1d5;">TrimStrings</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; \Illuminate\Foundation\Http\Middleware\<span style="color: #9de1d5;">ConvertEmptyStringsToNull</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; ];</div>
            <br />
            <div>&nbsp; &nbsp; <span style="color: #b8d2ad;">/**</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* The application's route middleware groups.</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* </span><span style="color: #99c3e6;">@var</span> <span style="color: #99c3e6;">array</span><span style="color: #b8d2ad;">&lt;</span><span style="color: #99c3e6;">string</span><span style="color: #b8d2ad;">, array&lt;int, class-string|string&gt;&gt;</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*/</span></div>
            <div>&nbsp; &nbsp; <span style="color: #99c3e6;">protected</span> <span style="color: #add5eb;">$middlewareGroups</span> = [</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'web'</span> =&gt; [</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \App\Http\Middleware\<span style="color: #9de1d5;">EncryptCookies</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \Illuminate\Cookie\Middleware\<span style="color: #9de1d5;">AddQueuedCookiesToResponse</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \Illuminate\Session\Middleware\<span style="color: #9de1d5;">StartSession</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #b8d2ad;">// \Illuminate\Session\Middleware\AuthenticateSession::class,</span></div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \Illuminate\View\Middleware\<span style="color: #9de1d5;">ShareErrorsFromSession</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \App\Http\Middleware\<span style="color: #9de1d5;">VerifyCsrfToken</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \Illuminate\Routing\Middleware\<span style="color: #9de1d5;">SubstituteBindings</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; ],</div>
            <br />
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'api'</span> =&gt; [</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #b8d2ad;">// \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,</span></div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'throttle:api'</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \Illuminate\Routing\Middleware\<span style="color: #9de1d5;">SubstituteBindings</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; ],</div>
            <div>&nbsp; &nbsp; ];</div>
            <br />
            <div>&nbsp; &nbsp; <span style="color: #b8d2ad;">/**</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* The application's route middleware.</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* These middleware may be assigned to groups or used individually.</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* </span><span style="color: #99c3e6;">@var</span> <span style="color: #99c3e6;">array</span><span style="color: #b8d2ad;">&lt;</span><span style="color: #99c3e6;">string</span><span style="color: #b8d2ad;">, class-string|string&gt;</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*/</span></div>
            <div>&nbsp; &nbsp; <span style="color: #99c3e6;">protected</span> <span style="color: #add5eb;">$routeMiddleware</span> = [</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'auth'</span> =&gt; \App\Http\Middleware\<span style="color: #9de1d5;">Authenticate</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'auth.basic'</span> =&gt; \Illuminate\Auth\Middleware\<span style="color: #9de1d5;">AuthenticateWithBasicAuth</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'cache.headers'</span> =&gt; \Illuminate\Http\Middleware\<span style="color: #9de1d5;">SetCacheHeaders</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'can'</span> =&gt; \Illuminate\Auth\Middleware\<span style="color: #9de1d5;">Authorize</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'guest'</span> =&gt; \App\Http\Middleware\<span style="color: #9de1d5;">RedirectIfAuthenticated</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'password.confirm'</span> =&gt; \Illuminate\Auth\Middleware\<span style="color: #9de1d5;">RequirePassword</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'signed'</span> =&gt; \Illuminate\Routing\Middleware\<span style="color: #9de1d5;">ValidateSignature</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'throttle'</span> =&gt; \Illuminate\Routing\Middleware\<span style="color: #9de1d5;">ThrottleRequests</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'verified'</span> =&gt; \Illuminate\Auth\Middleware\<span style="color: #9de1d5;">EnsureEmailIsVerified</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ddb2a1;">'HtmlMinifier'</span> =&gt; \App\Http\Middleware\<span style="color: #9de1d5;">HtmlMinifier</span>::<span style="color: #99c3e6;">class</span>,</div>
            <div>&nbsp; &nbsp; ];</div>
            <div>}</div>
        </div>
        <h6 class="font-sans break-normal text-green-400 pt-6 pb-2 text-sm md:text-4xl"># Middleware Parameters</h6>
        <p id="parameters" class="text-dark dark:text-white mt-6 mb-6">
            We can also pass parameters with the Middleware. For example, if your application has different roles like user, admin, super admin etc. 
            and you want to authenticate the action based on role, this can be achieved by passing parameters with middleware. 
            The middleware that we create contains the following function and we can pass our custom argument after the $next argument.
        </p>
        <div style="color: #d4d4d4; background-color: #374151; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre; padding: 20px;" class="rounded border-gray-200 dark:border-gray-600">
                <div class="text-center mb-3"><span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-2.5 rounded dark:bg-green-200 dark:text-green-900">app/Http/Middleware/TestMiddleware</span></div>
                <div><span style="color: #99c3e6;">&lt;?php</span></div>
                <br />
                <div><span style="color: #99c3e6;">namespace</span> <span style="color: #9de1d5;">App\Http\Middleware</span>;</div>
                <br />
                <div><span style="color: #99c3e6;">use</span> <span style="color: #9de1d5;">Closure</span>;</div>
                <div><span style="color: #99c3e6;">use</span> Illuminate\Http\<span style="color: #9de1d5;">Request</span>;</div>
                <br />
                <div><span style="color: #99c3e6;">class</span> <span style="color: #9de1d5;">TestMiddleware</span></div>
                <div>{</div>
                <div>&nbsp; &nbsp; <span style="color: #b8d2ad;">/**</span></div>
                <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* Handle an incoming request.</span></div>
                <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*</span></div>
                <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* </span><span style="color: #99c3e6;">@param</span><span style="color: #b8d2ad;"> &nbsp;\Illuminate\Http\</span><span style="color: #9de1d5;">Request</span><span style="color: #b8d2ad;"> &nbsp;$request</span></div>
                <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* </span><span style="color: #99c3e6;">@param</span><span style="color: #b8d2ad;"> &nbsp;\</span><span style="color: #9de1d5;">Closure</span><span style="color: #b8d2ad;">(\Illuminate\Http\</span><span style="color: #9de1d5;">Request</span><span style="color: #b8d2ad;">): </span></div>
                <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* (\Illuminate\Http\</span><span style="color: #9de1d5;">Response</span><span style="color: #b8d2ad;">|\Illuminate\Http\</span><span style="color: #9de1d5;">RedirectResponse</span><span style="color: #b8d2ad;">) &nbsp;$</span><span style="color: #9de1d5;">next</span></div>
                <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* @</span><span style="color: #9de1d5;">return</span><span style="color: #b8d2ad;"> \Illuminate\Http\</span><span style="color: #9de1d5;">Response</span><span style="color: #b8d2ad;">|\Illuminate\Http\</span><span style="color: #9de1d5;">RedirectResponse</span></div>
                <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*/</span></div>
                <div>&nbsp; &nbsp; <span style="color: #99c3e6;">public</span> <span style="color: #99c3e6;">function</span> <span style="color: #dcdca7;">handle</span>(<span style="color: #add5eb;">$request</span>, <span style="color: #9de1d5;">Closure</span> <span style="color: #add5eb;">$next</span>, <span style="color: #add5eb;">$role</span>) {</div>
                <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdca7;">echo</span> <span style="color: #ddb2a1;">"Role: "</span>.<span style="color: #add5eb;">$role</span>;</div>
                <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d6a9d2;">return</span> <span style="color: #add5eb;">$next</span>(<span style="color: #add5eb;">$request</span>);</div>
                <div>&nbsp; &nbsp; &nbsp;}</div>
                <div>}</div>
        </div>
        <h6 class="font-sans break-normal text-green-400 pt-6 pb-2 text-sm md:text-4xl"># Terminable Middleware</h6>
        <p id="terminable" class="text-dark dark:text-white mt-6 mb-6">
            Terminable middleware performs some task after the response has been sent to the browser. 
            This can be accomplished by creating a middleware with terminate method in the middleware. 
            Terminable middleware should be registered with global middleware. 
            The terminate method will receive two arguments $request and $response. 
            Terminate method can be created as shown in the following code.
        </p>
        <div style="color: #d4d4d4; background-color: #374151; font-family: Consolas, 'Courier New', monospace; line-height: 19px; white-space: pre; padding: 20px;" class="rounded border-gray-200 dark:border-gray-600">
            <div class="text-center mb-3"><span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-2.5 rounded dark:bg-green-200 dark:text-green-900">app/Http/Middleware/TerminateMiddleware</span></div>
            <div><span style="color: #99c3e6;">&lt;?php</span></div>
            <br />
            <div><span style="color: #99c3e6;">namespace</span> <span style="color: #9de1d5;">App\Http\Middleware</span>;</div>
            <br />
            <div><span style="color: #99c3e6;">use</span> <span style="color: #9de1d5;">Closure</span>;</div>
            <div><span style="color: #99c3e6;">use</span> Illuminate\Http\<span style="color: #9de1d5;">Request</span>;</div>
            <br />
            <div><span style="color: #99c3e6;">class</span> <span style="color: #9de1d5;">TerminateMiddleware</span></div>
            <div>{</div>
            <div>&nbsp; &nbsp; <span style="color: #b8d2ad;">/**</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* Handle an incoming request.</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* </span><span style="color: #99c3e6;">@param</span><span style="color: #b8d2ad;"> &nbsp;\Illuminate\Http\</span><span style="color: #9de1d5;">Request</span><span style="color: #b8d2ad;"> &nbsp;$request</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* </span><span style="color: #99c3e6;">@param</span><span style="color: #b8d2ad;"> &nbsp;\</span><span style="color: #9de1d5;">Closure</span><span style="color: #b8d2ad;">(\Illuminate\Http\</span><span style="color: #9de1d5;">Request</span><span style="color: #b8d2ad;">): </span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* (\Illuminate\Http\</span><span style="color: #9de1d5;">Response</span><span style="color: #b8d2ad;">|\Illuminate\Http\</span><span style="color: #9de1d5;">RedirectResponse</span><span style="color: #b8d2ad;">) &nbsp;$</span><span style="color: #9de1d5;">next</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;* @</span><span style="color: #9de1d5;">return</span><span style="color: #b8d2ad;"> \Illuminate\Http\</span><span style="color: #9de1d5;">Response</span><span style="color: #b8d2ad;">|\Illuminate\Http\</span><span style="color: #9de1d5;">RedirectResponse</span></div>
            <div><span style="color: #b8d2ad;">&nbsp; &nbsp; &nbsp;*/</span></div>
            <div>&nbsp; &nbsp; <span style="color: #99c3e6;">public</span> <span style="color: #99c3e6;">function</span> <span style="color: #dcdca7;">handle</span>(<span style="color: #add5eb;">$request</span>, <span style="color: #9de1d5;">Closure</span> <span style="color: #add5eb;">$next</span>) {</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdca7;">echo</span> <span style="color: #ddb2a1;">"//Executing statements"</span>;</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #d6a9d2;">return</span> <span style="color: #add5eb;">$next</span>(<span style="color: #add5eb;">$request</span>);</div>
            <div>&nbsp; &nbsp; &nbsp;}</div>
            <div>&nbsp; &nbsp; &nbsp;</div>
            <div>&nbsp; &nbsp; &nbsp;<span style="color: #99c3e6;">public</span> <span style="color: #99c3e6;">function</span> <span style="color: #dcdca7;">terminate</span>(<span style="color: #add5eb;">$request</span>, <span style="color: #add5eb;">$response</span>) {</div>
            <div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #dcdca7;">echo</span> <span style="color: #ddb2a1;">"//Executing statements"</span>;</div>
            <div>&nbsp; &nbsp; &nbsp;}</div>
            <div>}</div>
            </div>
            </div>
        </div>
        <p class="text-dark dark:text-white mt-6 mb-6">
            That's it for Laravel Middlewares, I hope that was helpful, have a good day, and enjoy your coding journey.
        </p> --}}
    