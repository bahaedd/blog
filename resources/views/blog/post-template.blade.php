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
            <div class="mt-4 flex text-sm"><span class="text-green-400 mr-3">laravel-tutorials:~$</span> php artisan make:model Example -m</div>
        </div>
    </div>
    </td>
    </tr>
    <tr>
        <td>
            <table cellspacing="0" cellpadding="0" class="code_page">
                <tr>
                    <td valign="top" id="L_0_1" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;&nbsp;1&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_1"><span class="normal real_text" style="background-color: #ffffff; color: #000000;">&lt;?php</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_2" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;&nbsp;2&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_2"><span class="normal empty_text" style="background-color: #ffffff; color: #000000;">&nbsp;</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_3" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;&nbsp;3&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_3"><span class="normal real_text" style="background-color: #ffffff; color: #000000;"></span><span class="italic real_text" style="background-color: #ffffff; color: #34a7bd;">use</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;"> </span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">Illuminate</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">\</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">Support</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">\</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">Facades</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">\</span><span class="italic real_text" style="background-color: #ffffff; color: #34a7bd;">Route</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">;</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_4" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;&nbsp;4&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_4"><span class="normal empty_text" style="background-color: #ffffff; color: #000000;">&nbsp;</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_5" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;&nbsp;5&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_5"><span class="normal real_text" style="background-color: #ffffff; color: #000000;"></span><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">/*</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_6" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;&nbsp;6&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_6"><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">|--------------------------------------------------------------------------</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_7" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;&nbsp;7&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_7"><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">| Web Routes</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_8" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;&nbsp;8&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_8"><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">|--------------------------------------------------------------------------</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_9" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;&nbsp;9&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_9"><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">|</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_10" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;10&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_10"><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">| Here is where you can register web routes for your application. These</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_11" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;11&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_11"><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">| routes are loaded by the RouteServiceProvider within a group which</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_12" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;12&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_12"><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">| contains the "web" middleware group. Now create something great!</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_13" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;13&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_13"><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">|</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_14" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;14&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_14"><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;"></span><span class="normal real_text" style="background-color: #ffffff; color: #a5a5a5;">*/</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_15" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;15&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_15"><span class="normal empty_text" style="background-color: #ffffff; color: #000000;">&nbsp;</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_16" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;16&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_16"><span class="normal real_text" style="background-color: #ffffff; color: #000000;"></span><span class="italic real_text" style="background-color: #ffffff; color: #34a7bd;">Route</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">::</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">get</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">(</span><span class="normal real_text" style="background-color: #ffffff; color: #8f8634;">'</span><span class="normal real_text" style="background-color: #ffffff; color: #8f8634;">/</span><span class="normal real_text" style="background-color: #ffffff; color: #8f8634;">'</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">,</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;"> </span><span class="italic real_text" style="background-color: #ffffff; color: #34a7bd;">function</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;"> </span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">(</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">)</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;"> </span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">{</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_17" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;17&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_17"><span class="normal real_text" style="background-color: #ffffff; color: #000000;">&nbsp;&nbsp;&nbsp; </span><span class="normal real_text" style="background-color: #ffffff; color: #c70040;">return</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;"> </span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">view</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">(</span><span class="normal real_text" style="background-color: #ffffff; color: #8f8634;">'</span><span class="normal real_text" style="background-color: #ffffff; color: #8f8634;">welcome</span><span class="normal real_text" style="background-color: #ffffff; color: #8f8634;">'</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">)</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">;</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" id="L_0_18" class="code_text code_gutter" style="background: #e5e5e5"><span style="color: #858585;">&nbsp;18&nbsp;</span></td>
                    <td valign="top" class="code_text code_line" style="background-color: #ffffff;">
                        <div id="C_0_18"><span class="normal real_text" style="background-color: #ffffff; color: #000000;"></span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">}</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">)</span><span class="normal real_text" style="background-color: #ffffff; color: #000000;">;</span>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    </table>
    </pre>
    <div id="toolbarhide">
        <div id="toolbar"><img onclick="toggle_plain_text();" alt="" title="Toggle Plain" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3AofFg8dF9eGSAAAAAxpVFh0Q29tbWVudAAAAAAAvK6ymQAAANRJREFUOMvdkTFOgkEQhResaeQScAsplIRGDgKttnsIOYIUm1hQa/HfQiMFcIBt9k/UTWa/sRkbspKfzviS7eZ7M/uec39WbdsOgU/gI6V0ebZBKeVeTaWUu7PgpmkugD3wZW8XQuh3NhCRuaoq8AisVVVF5LazAfBi0JWITMzsuROccx4b8O6cc977HrAFyDmPumxfHQf3EyjwcBKOMQ6ApL8ISDHGwanqljb4VLlsY5ctqrD99c3Cm1aamZn5q/e+V6vuxgb2tc5DCH3gYAuu3f/RNzmJ99G3cZ53AAAAAElFTkSuQmCC" /><img onclick="toggle_gutter();" alt="" title="Toggle Gutter" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3AofFg8FBLseHgAAAAxpVFh0Q29tbWVudAAAAAAAvK6ymQAAAM5JREFUOMvdjzFqAlEQhuephZWNYEq9wJ4kt7C08AiyhWCXQI6xh5CtUqVJEbAU1kA6i92VzWPnmxR5gUUsfAQbf5himPm+YURumSzLetFQWZZj4Bn45DcHYFMUxfAqAbA1MwO+gHeA0L9cJfDeJ6q6yvO8LyKiqosgOKVp6qJf8t4nQfD9J42Kqi6D4DUabppmBhzNzNq2fYyC67p+AHbh+iYKrqpqAnwE+Ok/8Dr6b+AtwArsu6Wq8/P9wQXHTETEOdcTkWl3YGYjub/8ANrnvguZ++ozAAAAAElFTkSuQmCC" /><img onclick="toggle_wrapping();" alt="" title="Toggle Wrapping" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3AsBFiYl9jWoIQAAAAxpVFh0Q29tbWVudAAAAAAAvK6ymQAAAP1JREFUOMudk0FuwkAMRZ+jbCGZXADlKvS8HKG9Qa8Q1K5LSLpG+ixwUmdKQMLSSDOeb/v7e8bITJIBNWD5FTCYmaLT7gTWwDtQZQlG4A0YYiILwTvgwxNsgV+vOuEm3wDsga+ZjaQkqZN0kdT7vpXU+Grd1zumk5Rm6g44STr6PjmriEl+d3RsK8li9T/nimXFOkmp8P4mwcZc5YXit7vRjxVgBQ/MK1aPWBWu9Jw1A9c+mZ0nW7AFdLevwKCR9BPE/SdiaWaSNADntdb9jXz6eQt8L15lGFM+vsarRevjtMqg7pkXrHghZiFs+QS8xmwDHIC9PXsHK197/t5XQswlGeOCYgkAAAAASUVORK5CYII=" /><img onclick="page_print();" alt="" title="Print" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3AofFhAl8o8wSAAAAAxpVFh0Q29tbWVudAAAAAAAvK6ymQAAAQZJREFUOMulkzFSgjEUhL8X/xJ/iBegkAtQ6A08gIUehFthYykOw9BzBmwcaxGoZW1eZjIx/sC4TTJv8ja7mxfDIcmAAWDUIeDLzJQXm2w/AFZOkB8yoAU+gHtJ7yVJUnAlaS1pJOm6WN8kjSUtJQ1dLQChIvMATIEXXw9e3wMT4NnV/rKQsAcegAvgG9g5wcwv7OU51QgugSegD2yBO+DWmyLw+leINQXyW5VeoQj4qIIcW+CxPFwjSLKtEnAZOkGSSYruL3QMUxq0AERJUZKl5pV7bjsmMR+qHfAJ3DReDB4cwKLiv0R0S5Yy6ANz37ecgSZ7nui1zYm9G0B2wi+k63fyX/wA0b9vjF8iB3oAAAAASUVORK5CYII=" /></div>
    </div>
    <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">This command will create the Model and the "examples" table</p>
    <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Step 3: Adding User Model</p>
    <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">The next step is to add a User model to your application. This model will be used to store user information in your database. To create a User model, you can run the following command:</p>
    <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white font-mono subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
        <div class="mt-4 flex"><span class="text-green-400 mr-3">laravel:~$</span> php artisan make:model User</div>
    </div>
    <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">password field.</p>
    <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Step 5: Running Migrations</p>
    <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">users table in your database. You can do this by running the following command:</p>
    <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-mono subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
        <div class="mt-4 flex"><span class="text-green-400 mr-3">laravel:~$</span> php artisan migrate</div>
    </div>
    <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Now that you have set up the basic authentication system, you can add a user registration feature to your application. To do this, you need to create a form for users to enter their information and a controller to handle the submission of the form.</p>
    <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-mono subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
        <div class="mt-4 flex"><span class="text-green-400 mr-3">laravel:~$</span> php artisan make:controller Auth/RegisterController</div>
    </div>
    <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Finally, you need to add a user login feature to your application. To do this, you need to create a form for users to enter their email and password, and a controller to handle the submission of the form.</p>
    <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">login view that you can use for user login. To create a controller for user login, you can run the following command:</p>
    <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-white  font-mono subpixel-antialiased bg-gray-900  pb-6 pt-4 rounded-lg leading-normal overflow-hidden">
        <div class="mt-4 flex"><span class="text-green-400 mr-3">laravel:~$</span> php artisan make:controller Auth/LoginController</div>
    </div>
    <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Step 8: Protecting Routes</p>
    <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">/dashboard route so that only authenticated users can access it. You can do this by adding the following code to your `routes/</p>
    <!--/ Post Content-->
    <hr class="mt-6 mb-6 divide-y-4 divide-green-400/25 ...">
    <div class="w-full">
        Comments
    </div>
</div>
<!-- sidebar -->
@include('/blog/layouts.sidebar')
</div>
@endsection
