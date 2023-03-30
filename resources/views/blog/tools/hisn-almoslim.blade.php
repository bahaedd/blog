<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('/blog/layouts.head')

<body class="bg-white dark:bg-gray-800">
    @include('/blog/layouts.navbar')
    <div class="px-16 mx-auto py-16 md:py-20 mb-6 mt-24" style="direction: rtl;">
        <h2 class="my-4 mb-12 text-4xl text-center font-semibold text-yellow-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-yellow-700">حصن المسلم</h2>
        <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
            <a href="{{ route('adhkar-sabah') }}">
                <div class="group rounded px-8 py-12 shadow bg-yellow-300">
                    <div class="text-center">
                        <h3 class="pt-2 text-lg font-semibold text-primary group-hover:text-yellow lg:text-xl">أذكار الصباح</h3>
                    </div>
                </div>
            </a>
            <a href="{{ route('home') }}">
                <div class="group rounded px-8 py-12 shadow bg-yellow-300">
                    <div class="text-center">
                        <h3 class="pt-2 text-lg font-semibold text-primary group-hover:text-yellow lg:text-xl">أذكار بعد الصلاة</h3>
                    </div>
                </div>
            </a>
            <a href="{{ route('adhkar-almasae') }}">
                <div class="group rounded px-8 py-12 shadow bg-yellow-300">
                    <div class="text-center">
                        <h3 class="pt-2 text-lg font-semibold text-primary group-hover:text-yellow lg:text-xl">أذكار المساء</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
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
