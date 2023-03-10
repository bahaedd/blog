<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('title', "Adhan, Prayer Times")
@include('/blog/layouts.head')

<body class="border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
    <!-- navbar -->
    @include('/blog/layouts.navbar')
    <!-- container -->
    <div class="px-16 mx-auto py-16 md:py-20 mb-72">
        <h2 class="my-4 mb-12 text-4xl text-center font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700">Prayer Times</h2>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
               <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                {{ $data['data'][$i]['date']['gregorian']['weekday']['en'] }}, {{ $data['data'][$i]['date']['gregorian']['day'] }} {{ $data['data'][$i]['date']['gregorian']['month']['en'] }} $data['data'][$i]['date']['gregorian']['month']['en'] }} | {{ $data['data'][$i]['date']['readable'] }} ,{{ $data['data'][$i]['date']['hijri']['weekday']['ar'] }}
            </p>
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
                  @for ($i = 0; $i < count($data['data']); $i++)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data['data'][$i]['date']['gregorian']['weekday']['en'] }}, {{ $data['data'][$i]['date']['hijri']['date'] }} | {{ $data['data'][$i]['date']['readable'] }} ,{{ $data['data'][$i]['date']['hijri']['weekday']['ar'] }}
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
