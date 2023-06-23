<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('/blog/layouts.head')

<body class="border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
    @include('/blog/layouts.navbar')
    <div class="px-16 mx-auto py-16 md:py-20 mb-72">
        <h2 class="my-4 mb-12 text-4xl text-center font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700">Image Converter</h2>
        <form class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0" action="{{url('/projects/passwordgenerator/generate')}}" method="POST">
            @csrf
            <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal rounded">
                <div class="flex items-center justify-center w-full">
                    <input class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file">
                    </label>
                </div>

            </section>
            <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal">
                <select id="types" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Convert to</option>
                    <option value="png">PNG</option>
                    <option value="jpg">JPG</option>
                    <option value="gif">GIF</option>
                    <option value="webp">webpack</option>
                </select>

                <input type="submit" name="send" value="Convert" class="mt-6 flex items-center justify-center rounded bg-green-700 px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20">
            </section>
        </form>
        <div class="flex justify-items-center px-6 m-b-3 mt-12 {{ $hidden }}">
            <a href="{{ route('mailerpack') }}" class="text-green-700 mt-4 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                <ion-icon name="chevron-back-outline"></ion-icon> Back to MailerPack
            </a>
        </div>
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
