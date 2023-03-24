@extends('/blog/main')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="flex justify-center min-h-screen">
        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl text-center font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                    Get in touch.
                </h1>

                <p class="mt-4 mb-6 text-center text-gray-500 dark:text-gray-400">
                    Got a technical issue? Need help? Wanna hire me? Let me know.
                </p>
                <form class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md" action="{{url('portfolio/store')}}" method="post">
                    @csrf
                    @if (session()->has('success'))
                        <div class="flex p-4 mb-4 text-sm text-center text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                          <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                          <span class="sr-only">Info</span>
                          <div>
                            <span class="font-medium">{{ session()->get('success') }}</span>
                          </div>
                        </div>
                    @endif
                    <div class="flex flex-col md:flex-row">
                        <input class="mr-3 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body  md:w-1/2 lg:mr-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('name') ? 'error' : '' }}" placeholder="Name" type="text" name="name" id="name">
                        <!-- Error -->
                        @if ($errors->has('name'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Please enter your name.</p>
                        @endif
                        <input class="mt-6 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('email') ? 'error' : '' }}" placeholder="Email" type="text" name="email" id="email">
                        @if ($errors->has('email'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Please enter your email.</p>
                        @endif
                    </div>
                    <textarea class="mt-6 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('message') ? 'error' : '' }}" placeholder="Message" id="message" cols="30" rows="10" name="message"></textarea>
                    @if ($errors->has('message'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Please enter your message.</p>
                    @endif
                    <div class="text-center mt-4">
                    <button type="submit" name="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      SUBMIT
                      <ion-icon name="send-outline" class="w-5 h-5 ml-2 -mr-1"></ion-icon>
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
