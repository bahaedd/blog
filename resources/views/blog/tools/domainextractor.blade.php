<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @section('title', "Domain Extractor")
    @include('/blog/layouts.head')
    <body class="border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
        <!-- navbar -->
        @include('/blog/layouts.navbar')

        <!-- container -->
        <div class="px-16 mx-auto py-16 md:py-20 mb-24">
            <h2 class="my-4 mb-12 text-4xl text-center font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700">Domain Extractor</h2>

<nav class="flex mb-12" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="{{ route('mailerpack') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Tools
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="{{ route('mailerpack') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">MailerPack</a>
      </div>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Domain Extractor</span>
      </div>
    </li>
  </ol>
</nav>

            <form class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0" method="POST" action="{{url('/projects/domainextractor/extract')}}">
                @csrf
                <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal">
                <textarea id="text" name="text" rows="12" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Paste your text here..."></textarea>
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
                <input type="submit" name="send" value="Submit" class="mt-6 flex items-center justify-center rounded bg-green-700 px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20">
                </section>
                <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal">
                    <textarea id="result" name="result" rows="12" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @if(empty($Dmatch)) hidden @endif " placeholder="" style="white-space: white-space: pre-wrap;;">
                        @foreach ($Dmatch as $key => $value){{ $value }}&nbsp; @endforeach
                    </textarea>
                    <button type="button" class="btn mt-6 flex items-center justify-center rounded bg-green-700 px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20 @if(empty($Dmatch)) hidden @endif" data-tooltip-target="tooltip-dark" data-clipboard-target="#result">Copy</button>
                </section>
                <div id="tooltip-dark" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Copy to clipboard
                <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </form>
            {{-- <div class="flex justify-items-center px-6 m-b-3 mt-12">
                <a href="{{ route('mailerpack') }}" class="text-green-700 mt-4 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"><ion-icon name="chevron-back-outline"></ion-icon> Back to MailerPack</a>
            </div> --}}
        </div>

        <!-- Footer -->
        @include('/blog/layouts.footer')
        <livewire:scripts />
        <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
        <script type="text/javascript">
            var Clipboard = new ClipboardJS('.btn');
            function setTooltip() {
              const div = document.getElementById('tooltip-dark');
              div.textContent = 'Copied';
            }
            function hideTooltip() {
              setTimeout(function() {
                const div = document.getElementById('tooltip-dark');
                div.textContent = 'Copy to clipboard';
              }, 1000);
            }
            Clipboard.on('success', function(e) {
                setTooltip();
                hideTooltip();
            });
        </script>
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
