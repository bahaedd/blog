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
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">When building complex database transactions in Laravel, it's important to use transactions to ensure data consistency and prevent data corruption. In this post, we'll cover the basics of using transactions in Laravel to manage database operations.</p>
        <h3 class="pt-6 font-body leading-relaxed text-blue-700">- What are Transactions?</h3>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">A database transaction is a set of database operations that are performed as a single, atomic unit of work. Transactions ensure that all the database operations in the unit of work are completed successfully, or that none of them are completed at all. If an error occurs during any of the operations, the entire transaction is rolled back, and the database is left in its original state.</p>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Transactions are critical for maintaining data consistency, especially when you have multiple database operations that depend on one another. If one operation fails, it can leave the database in an inconsistent state, which can cause serious problems for your application.</p>
        <h3 class="pt-6 font-body leading-relaxed text-blue-700">- Use Transactions in Laravel</h3>
        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Laravel provides a simple way to use transactions using the DB facade. Here's an example:</p>       
         <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-green-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <pre class="">
                    <p>use Illuminate\Http\Request;</p>
                    <p>use Illuminate\Support\Facades\DB;</p>
                    <p>use Exception;</p>
                    <p>use App\Models\User;</p>
                    <p>  </p>
                    <p class="text-red-400">class UserController extends Controller</p>
                    <p class="text-red-400">{</p>
                    <p class="text-blue-400">    public function store(Request $request)</p>
                    <p class="text-blue-400">    {</p>
                    <p>        try {</p>
                    <p>            </p>
                    <p>            // Start DB Transaction</p>
                    <p>            DB::beginTransaction();</p>
                    <p>  </p>
                    <p>            // Create New User</p>
                    <p>            $user = User::create([</p>
                    <p>                    'name' => $request->name,</p>
                    <p>                    'email' => $request->email,</p>
                    <p>                    'password' => bcrypt($request->password)</p>
                    <p>                ]);</p>
                    <p>  </p>
                    <p>            // Commit Transaction to Save Data to Database</p>
                    <p>            DB::commit();</p>
                    <p>        } catch (Exception $e) {</p>
                    <p>            // Rollback Database Entry</p>
                    <p>            DB::rollback();</p>
                    <p>            throw $e;</p>
                    <p>        }</p>
                    <p>  </p>
                    <p class="text-blue-400">    }</p>
                    <p class="text-red-400">}</p>
                </pre>  
        </div>

        
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">This code begins a new database transaction using the <code>beginTransaction()</code> method. The try block contains the database operations you want to perform within the transaction. If any of the operations fail, an exception will be thrown, and the catch block will be executed. The <code>rollback()</code> method is used to undo all the operations that were performed in the transaction, so the database is left in its original state. If all the operations complete successfully, the <code>commit()</code> method is called, and the changes are saved to the database.</p>
        
        <h3 class="pt-6 font-body leading-relaxed text-blue-700">Nested Transactions</h3>
        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Laravel also supports nested transactions, which can be useful when you need to perform multiple transactions within a single database operation:</p>

        <div class="coding inverse-toggle px-5 pt-4 shadow-lg text-green-400 text-sm bg-gray-700  pb-6 pt-4 rounded-lg leading-normal overflow-hidden mt-12">
                <code class="">
                    <p>DB::beginTransaction();</p>
                    <p></p>
                    <p>try {</p>
                    <p>    // Perform database operations here...</p>
                    <p>    DB::beginTransaction();</p>
                    <p></p>
                    <p>    try {</p>
                    <p>        // Perform additional database operations here...</p>
                    <p>        DB::commit();</p>
                    <p>    } catch (\Exception $e) {</p>
                    <p>        DB::rollback();</p>
                    <p>    }</p>
                    <p>    DB::commit();</p>
                    <p>} catch (\Exception $e) {</p>
                    <p>    DB::rollback();</p>
                    <p>}</p>
                </code>  
        </div>
        

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">In this example, we begin a new transaction using <code>beginTransaction()</code> and perform some database operations. Then we begin another transaction, perform additional operations, and commit that transaction. Finally, we commit the outer transaction. If any of the database operations fail, the transactions will be rolled back, and the database will be left in its original state..</p>

        <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">Using transactions is essential when performing complex database operations in Laravel. They ensure that your database remains in a consistent state, even in the face of errors or other problems. By using the <code class="text-red-700">DB</code> facade and the <code class="text-blue-700"> beginTransaction(), commit(), and rollback() </code> methods, you can easily manage database transactions in Laravel.</p>

        <p class="pt-6 pb-6 font-body leading-relaxed text-grey-20 dark:text-white">Thanks for following up to this point, I hope that was clear and helpful. Enjoy your code journey...</p>
    </div>
    <!-- sidebar -->
    @include('/blog/layouts.sidebar')
</div>
@endsection
