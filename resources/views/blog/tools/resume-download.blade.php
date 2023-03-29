<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('/blog/layouts.head')

<body class="border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
    <!-- navbar -->
    @include('/blog/layouts.navbar')
    <!-- container -->
    <div class="px-3 mx-3 py-3 md:py-20 mb-3">
        <div class="mt-3 mb-3 text-center">
            <a href="{{ route('pdfview',['download'=>'pdf']) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <ion-icon name="cloud-download" class="mr-2"></ion-icon> Download
            </a>
        </div>
        <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
            <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
                <div class="bg-dark-gray w-full min-h-screen rounded-lg border border-green-600 shadow-md p-6 border border-green-600">
                    <div class="w-full max-w-6xl mx-auto px-4 py-8 flex justify-between md:flex-no-wrap flex-wrap">
                        <div class="md:w-1/3 w-full">
                            <header>
                                @if($personal_informations)
                                <img src="{{URL('/storage/profiles/'.$personal_informations->image)}}" class="h-auto max-w-full rounded-lg" alt="{{ $personal_informations->name }}" width="230" height="160">
                                <div class="text-gray-500 dark:text-white mt-6">
                                    <a href="https://aliendev.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="person" class="mr-2"></ion-icon> {{ $personal_informations->name }}
                                    </a>
                                    <a href="https://aliendev.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="calendar-clear" class="mr-2"></ion-icon> {{ $personal_informations->birthday }}
                                    </a>
                                    <a href="https://aliendev.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="flag" class="mr-2"></ion-icon> {{ $personal_informations->nationality }}
                                    </a>
                                    <a href="https://linkedin.com/in/bahaeddine" class="hover:underline flex items-center">
                                        <ion-icon name="logo-linkedin" class="mr-2"></ion-icon>
                                        {{ $personal_informations->linkedin }}
                                    </a>
                                    <a href="https://twitter.com/bahaeddine" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="logo-twitter" class="mr-2"></ion-icon> {{ $personal_informations->twitter }}
                                    </a>
                                    <a href="mailto:sihassi.bahaeddine@gmail.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="mail" class="mr-2"></ion-icon> {{ $personal_informations->email }}
                                    </a>
                                    <a href="https://aliendev.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="globe" class="mr-2"></ion-icon> {{ $personal_informations->website }}
                                    </a>
                                </div>
                                @else
                                <img src="{{URL('/images/guest.jpg')}}" class="h-36 rounded-full sm:h-56" alt="Profile picture" width="230" height="160">
                                <div class="text-white mt-4">
                                    <a href="https://aliendev.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="person" class="mr-2"></ion-icon> Your name
                                    </a>
                                    <a href="https://aliendev.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="calendar-clear" class="mr-2"></ion-icon> Birthday
                                    </a>
                                    <a href="https://aliendev.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="flag" class="mr-2"></ion-icon> Nationality
                                    </a>
                                    <a href="https://linkedin.com/in/bahaeddine" class="hover:underline flex items-center">
                                        <ion-icon name="logo-linkedin" class="mr-2"></ion-icon>
                                        Linkedin Profile
                                    </a>
                                    <a href="https://twitter.com/bahaeddine" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="logo-twitter" class="mr-2"></ion-icon> Twitter Profile
                                    </a>
                                    <a href="mailto:sihassi.bahaeddine@gmail.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="mail" class="mr-2"></ion-icon> Email Address
                                    </a>
                                    <a href="https://aliendev.com" class="hover:underline flex items-center mt-1">
                                        <ion-icon name="globe" class="mr-2"></ion-icon> Website
                                    </a>
                                </div>
                                @endif
                            </header>
                            <section class="mt-16">
                                <h3 class="uppercase text-gray-500 dark:text-white font-medium text-3xl">Career Objectives</h3>
                                <div class="h-1 bg-green w-48 my-4">
                                </div>
                                @if($summary)
                                <p class="text-gray-500 dark:text-white">{{ $summary->summary }}</p>
                                @endif
                            </section>
                            <section class="mt-16">
                                <h3 class="uppercase text-gray-500 dark:text-white font-medium text-3xl">Skills</h3>
                                <div class="h-1 bg-green w-48 my-4">
                                </div>
                                <ul class="text-white list-none list-inside">
                                    @foreach($skills as $skill)
                                    <li class="mb-3">
                                        <div class="flex justify-between mb-1">
                                            <span class="text-base font-medium text-blue-700 dark:text-white">{{ $skill->title }}</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $skill->level }}%"></div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </section>
                            <section class="mt-16">
                                <h3 class="uppercase text-gray-500 dark:text-white font-medium text-3xl">Languages</h3>
                                <div class="h-1 bg-green w-48 my-4">
                                </div>
                                <div class="text-gray-500 dark:text-white">
                                    <ul class="text-gray-500 list-disc list-inside mt-4 dark:text-white">
                                        @foreach($languages as $language)
                                        <li>{{ $language->language }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </section>
                        </div>
                        <div class="md:w-2/4 w-full">
                            <section class="mt-16 md:mt-0">
                                <h3 class="uppercase text-gray-500 font-medium text-3xl dark:text-white">Education Summary</h3>
                                <div class="h-1 bg-green w-48 my-4">
                                </div>
                                @foreach($educations as $education)
                                <div class="mt-8">
                                    <h4 class="font-medium text-gray-500 text-2xl dark:text-white">{{ $education->degree }}</h4>
                                    <h5 class="font-medium text-gray-500 dark:text-white"><i>{{ $education->starts }} - {{ $education->ends }}</i></h5>
                                    <ul class="text-gray-500 list-disc list-inside mt-4 dark:text-white">
                                        <li>Score: {{ $education->score }}</li>
                                        <li>School: {{ $education->school }}</li>
                                        <li>Speciality: {{ $education->description }}</li>
                                    </ul>
                                </div>
                                @endforeach
                            </section>
                            <section class="mt-16">
                                <h3 class="uppercase text-gray-500 font-medium text-3xl dark:text-white">Work Summary</h3>
                                <div class="h-1 bg-green w-48 my-4">
                                </div>
                                @foreach($works as $work)
                                <div class="mt-8">
                                    <h4 class="font-medium text-gray-500 text-2xl dark:text-white">{{ $work->position }} | {{ $work->company }}</h4>
                                    <h5 class="font-medium text-gray-500 dark:text-white"><i>{{ $work->starts }} - {{ $work->ends }}</i></h5>
                                    <p class="text-gray-500 dark:text-white">
                                        {{ $work->description }}
                                    </p>
                                </div>
                                @endforeach
                            </section>
                            <section class="mt-16 md:mt-12">
                                <h3 class="uppercase text-gray-500 font-medium text-3xl dark:text-white">Projects</h3>
                                <div class="h-1 bg-green w-48 my-4">
                                </div>
                                @foreach($projects as $project)
                                <div class="mt-8">
                                    <h4 class="font-medium text-gray-500 text-2xl dark:text-white">{{ $project->title }}</h4>
                                    <h5 class="font-medium text-gray-500 dark:text-white"><i>{{ $project->date }} | {{ $project->tools }}</i></h5>
                                    <p class="text-gray-500 dark:text-white">
                                        {{ $project->description }}
                                    </p>
                                </div>
                                @endforeach
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
