<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('title', "Adhan, Prayer Times")
@include('/blog/layouts.head')

<body class="dark:bg-gray-800 bg-cover bg-center" style="height:40rem; background-repeat: no-repeat; background-attachment: fixed; background-image: url({{URL('/images/ramadan.png')}});">
    <!-- navbar -->
    @include('/blog/layouts.navbar')
    <!-- container -->
    <div class="px-16 mx-auto py-16 md:py-20 mb-6">
        <h2 class="my-4 mb-3 text-4xl text-center font-semibold text-yellow-300 rounded md:bg-transparent md:p-0 dark:text-yellow-300">Adhan Times</h2>
    </div>
    <div>
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-24">
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 mb-4 dark:bg-gray-800 mx-auto">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-gray-700">
                        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800 border border-gray-700">
                            <p class="mt-1 text-xl font-bold text-yellow-500 dark:text-yellow-500">{{ $data['data'][$today]['date']['gregorian']['day'] }} {{ $data['data'][$today]['date']['gregorian']['month']['en'] }} {{ $data['data'][$today]['date']['gregorian']['year']}} <span class="text-gray-300">|</span> {{ $data['data'][$today]['date']['hijri']['day'] }} {{ $data['data'][$today]['date']['hijri']['month']['ar'] }} {{ $data['data'][$today]['date']['hijri']['year']}}</p>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-400 dark:bg-gray-900 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Prayer
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Time
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Fajr
                                </th>
                                <td class="px-3 py-4">
                                    {{ $data['data'][$today]['timings']['Fajr'] }}
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Sunrise
                                </th>
                                <td class="px-3 py-4">
                                    {{ $data['data'][$today]['timings']['Sunrise'] }}
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Dhuhr
                                </th>
                                <td class="px-3 py-4">
                                    {{ $data['data'][$today]['timings']['Dhuhr'] }}
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Asr
                                </th>
                                <td class="px-3 py-4">
                                    {{ $data['data'][$today]['timings']['Asr'] }}
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Sunset
                                </th>
                                <td class="px-3 py-4">
                                    {{ $data['data'][$today]['timings']['Sunset'] }}
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   Maghrib
                                </th>
                                <td class="px-3 py-4">
                                    {{ $data['data'][$today]['timings']['Maghrib'] }}
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   Isha
                                </th>
                                <td class="px-3 py-4">
                                    {{ $data['data'][$today]['timings']['Isha'] }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-gray-700">
                        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800 border border-gray-700">
                            <p class="mt-1 text-xl font-bold text-yellow-500 dark:text-yellow-500 text-center">{{ $data['data'][$today]['date']['gregorian']['month']['en'] }} {{ $data['data'][$today]['date']['gregorian']['year']}} <span class="text-gray-300">|</span> {{ $data['data'][$today]['date']['hijri']['month']['ar'] }} {{ $data['data'][$today]['date']['hijri']['year']}}</p>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Day
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fajr
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sunrise
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Dhuhr
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Asr
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sunset
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Maghrib
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Isha
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($data['data']); $i++) <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespa ce-nowrap dark:text-white">
                                    {{ $data['data'][$i]['date']['gregorian']['day'] }} {{ $data['data'][$i]['date']['gregorian']['month']['en'] }} {{ $data['data'][$i]['date']['gregorian']['year']}} <span class="text-gray-300">|</span> {{ $data['data'][$i]['date']['hijri']['day'] }} {{ $data['data'][$i]['date']['hijri']['month']['ar'] }} {{ $data['data'][$i]['date']['hijri']['year']}}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $data['data'][$i]['timings']['Fajr'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data['data'][$i]['timings']['Sunrise'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data['data'][$i]['timings']['Dhuhr'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data['data'][$i]['timings']['Asr'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data['data'][$i]['timings']['Sunset'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data['data'][$i]['timings']['Maghrib'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data['data'][$i]['timings']['Isha'] }}
                                </td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                </div>
            </div>
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