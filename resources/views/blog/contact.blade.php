@extends('/blog/main')
@section('title', 'Contact Us')
@section('content')
<div class="w-full bg-cover bg-center" style="height:47rem; background-image: url({{URL('/images/bg.jpg')}});">
    <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
        <div class="flex flex-col items-center justify-center lg:flex-row">
            {{-- <section class="bg-white dark:bg-gray-900">
                <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Me</h2>
                    <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Need help? Wanna hire me? Let me know.</p>
                    <form action="#" class="space-y-8">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                            <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                        </div>
                        <div>
                            <label for="subject" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                            <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                            <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                        </div>
                        <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                    </form>
                </div>
            </section> --}}
            <div class="container mx-auto pt-16 md:pt-20 dark:bg-gray-800 mb-24" id="contact">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Me</h2>
                    <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Need help? Wanna hire me? Let me know.</p>
                @if(Session::has('success'))
                <div class="p-4 mb-4 mt-4 text-sm text-center text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium text-center justify-center mx-auto">{{Session::get('success')}}</span>
                </div>
                @endif
                <form class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md" action="{{url('portfolio/store')}}" method="post">
                    @csrf
                    <div class="flex flex-col md:flex-row">
                        <input class="mr-3 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body  md:w-1/2 lg:mr-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('name') ? 'error' : '' }}" placeholder="Name" type="text" name="name" id="name">
                        <!-- Error -->
                        @if ($errors->has('name'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Please enter your name.</p>
                        @endif
                        <input class="mt-6 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('email') ? 'error' : '' }}" placeholder="Email" type="text" name="email" id="email">
                        @if ($errors->has('email'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Please enter your email.</p>
                        @endif
                    </div>
                    <textarea class="mt-6 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('message') ? 'error' : '' }}" placeholder="Message" id="message" cols="30" rows="10" name="message"></textarea>
                    @if ($errors->has('message'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Please enter your message.</p>
                    @endif
                    <input type="submit" name="send" value="Submit" class="mt-6 flex items-center justify-center rounded bg-green-700 px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
