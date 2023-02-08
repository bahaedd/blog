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
            <form class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0" method="POST" action="{{url('/projects/urllookup/lookup')}}">
                @csrf
                <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal">
			    <div class="relative mt-12">
			        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
			            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
			        </div>
			        <input type="search" id="search" name="search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter any Valid URL">
			        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">URL Lookup</button>
			    </div>
                @if ($errors->any())
                    <div class="flex p-4 mt-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                      <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Info</span>
                      <div>
                        @foreach ($errors->all() as $error)
                           <span class="font-medium">{{ $error }}</span>
                        @endforeach
                      </div>
                    </div>
                @endif
                <div class="flex justify-items-center mt-12">
                        <a href="{{ route('mailerpack') }}" class="text-green-700 mt-4 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"><ion-icon name="chevron-back-outline"></ion-icon> Back to MailerPack</a>
                </div>
                </section>
                <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal {{ $hidden }}">
                    <h4 class="mb-4 text-center text-md font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700">Results for : {{ session()->get('domain') }}</h4>
					<div class="overflow-x-auto relative">
                        <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700 ml-12">
                           <li class="pb-3 sm:pb-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       Valid Domain
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    @if($data['is_valid'])
                                        Yes
                                    @else
                                        No
                                    @endif
                                 </div>
                              </div>
                           </li>
                           @if (array_key_exists('country', $data))
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       Country
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $data['country'] }}
                                 </div>
                              </div>
                           </li>
                           @endif
                           @if (array_key_exists('region', $data))
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       Region
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $data['region'] }}
                                 </div>
                              </div>
                           </li>
                           @endif
                           @if (array_key_exists('city', $data))
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       City
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $data['city'] }}
                                 </div>
                              </div>
                           </li>
                           @endif
                           @if (array_key_exists('zip', $data))
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       Zip
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $data['zip'] }}
                                 </div>
                              </div>
                           </li>
                           @endif
                           @if (array_key_exists('lon', $data))
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       Lon
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $data['lon'] }}
                                 </div>
                              </div>
                           </li>
                           @endif
                           @if (array_key_exists('lat', $data))
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       Lat
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $data['lat'] }}
                                 </div>
                              </div>
                           </li>
                           @endif
                           @if (array_key_exists('timezone', $data))
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       Timezone
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $data['timezone'] }}
                                 </div>
                              </div>
                           </li>
                           @endif
                           @if (array_key_exists('isp', $data))
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       ISP
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $data['isp'] }}
                                 </div>
                              </div>
                           </li>
                           @endif
                           @if (array_key_exists('url', $data))
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                       URL
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $data['url'] }}
                                 </div>
                              </div>
                           </li>
                           @endif
                        </ul>
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
