<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @section('title', "URL Lookup")
    @include('/blog/layouts.head')
    <body class="border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
        <!-- navbar -->
        @include('/blog/layouts.navbar')

        <!-- container -->
        <div class="px-16 mx-auto py-16 md:py-20 mb-72">
            <h2 class="my-4 mb-12 text-4xl text-center font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700">URL Lookup</h2>
            <form class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0" action="{{url('projects/urllookup/lookup')}}" method="post">
                @csrf
                <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal">
			    <div class="relative mt-12">
			        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
			            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
			        </div>
			        <input type="search" id="search" name="search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter any Valid URL" required>
			        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">URL Lookup</button>
			    </div>
                </section>
                <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal 
                @if($data[1] = 0) hidden @endif">
                    <h4 class="mb-4 text-center text-md font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700">Results for : {{ session()->get('domain') }}</h4>
					<div class="overflow-x-auto relative">
					    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
					        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					            <tr>
					                <th scope="col" class="py-3 px-6">
					                    Valid
					                </th>
					                <th scope="col" class="py-3 px-6">
					                    Country
					                </th>
                                    <th scope="col" class="py-3 px-6">
                                        Region
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        City
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Zip
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Lat
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Timezone
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        ISP
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        URL
                                    </th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
					            	<td class="py-4 px-6">
                                    @if($data[0] = 0)
                                        No
                                    @else
                                        Yes
                                    @endif                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[1] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[2] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[3] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[4] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[5] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[6] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[7] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[8] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[9] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[10] }}                 
                                    </td>
                                    <td class="py-4 px-6">
                                    {{ $data[11] }}                 
                                    </td>
					            </tr>
					        </tbody>
					    </table>
					</div>
                </section>
            </form>
        </div>

        <!-- Footer -->
        @include('/blog/layouts.footer')
        <livewire:scripts />
        <script>
            function getCarouselData() {
                return {
                    currentIndex: 0,
                    images: [
                        'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                        'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                    ],
                    increment() {
                        this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                    },
                    decrement() {
                        this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                    },
                }
            }
        </script>
        <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
        <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
        </script>
        <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

        // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

        });
        </script>



    </body>
</html>
