<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('/blog/layouts.head')

<body class="border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
    @include('/blog/layouts.navbar')
    <div class="px-16 mx-auto py-16 md:py-20 mb-24">
        <h2 class="my-4 mb-12 text-4xl text-center font-semibold text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-700">Exchange rate Converter</h2>
        <form class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0" method="POST" action="{{url('/projects/exchange-rate/check')}}">
            @csrf
            <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="">
                        <label for="from" class="text-sm font-medium text-gray-900 dark:text-gray-300">From</label>
                        <select id="from" name="from" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="">Select a currency</option>
                            @foreach ($data as $key => $value)
                            <option value="{{ $key }}">{{ $key }} ({{ $value }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label for="to" class="text-sm font-medium text-gray-900 dark:text-gray-300">To</label>
                        <select id="to" name="to" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="">Select a currency</option>
                            @foreach ($data as $key => $value)
                            <option value="{{ $key }}">{{ $key }} ({{ $value }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </div>
            </section>
            <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:p-6 text-xl text-white-800 leading-normal">
                <div class="p-4 mb-4 mt-12 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-700 dark:text-blue-400 text-center @if($hidden) hidden @endif" role="alert">
                    <span class="font-medium">{{ $result['query']['amount'] }} {{ $result['query']['from'] }} = {{ $result['result'] }} {{ $result['query']['to'] }}</span>
                </div>
            </section>
        </form>
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


        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');


        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }


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
