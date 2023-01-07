<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('title', "Resume Builder")
@include('/blog/layouts.head')

<body class="border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
    <!-- navbar -->
    @include('/blog/layouts.navbar')
    <!-- container -->
    <div class="px-3 mx-3 py-3 md:py-20 mb-3">
        <h2 class="my-4 mb-3 text-4xl text-center font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700">Resume Builder</h2>
    </div>
    <div class="bg-dark-gray w-full min-h-screen">
        <div class="w-full max-w-6xl mx-auto px-4 py-8 flex justify-between md:flex-no-wrap flex-wrap">
            <div class="md:w-1/3 w-full">
                <header>
                    <img src="{{URL('/images/profile.jpg')}}" class="h-36 rounded-full sm:h-56" alt="bahaeddine" width="230" height="160">
                    <img src="https://i.ibb.co/m8479nW/Web-Developer.png" alt="Logo" class="mt-4 max-w-sm w-full">
                </header>
                <section class="mt-16">
                    <h3 class="uppercase text-white font-medium text-3xl">Career Objectives</h3>
                    <div class="h-1 bg-green w-48 my-4">
                    </div>
                    <p class="text-white">I am a motivated team player and aspiring web developer with great design and branding knowledge. My ultimate goal is to grow my knowledge of the industry and use my conversational skills to help fast-paced startup design UI/UX charismas.</p>
                </section>
                <section class="mt-16">
                    <h3 class="uppercase text-white font-medium text-3xl">Specializations</h3>
                    <div class="h-1 bg-green w-48 my-4">
                    </div>
                    <ul class="text-white list-disc list-inside">
                        <li>Front End Design (HTML, CSS, Figma, Sass)</li>
                        <li><a href="https://tailwindcss.com" class="hover:underline">TailwindCSS (♥)</a></li>
                        <li>Javascript ES6/*7 (Data Modelling, Debugging, Async Performance)</li>
                        <li>Front End Development (Vue.js, React.js, Svelte)</li>
                        <li>User Interface/User Experience</li>
                        <li>Design Thinking & Problem Solving </li>
                        <li>Can develop high-performant front-end interfaces which interacts with backend API</li>
                    </ul>
                </section>
                <section class="mt-16">
                    <h3 class="uppercase text-white font-medium text-3xl">Contact Info:</h3>
                    <div class="h-1 bg-green w-48 my-4">
                    </div>
                    <div class="text-white">
                        <a href="https://linkedin.com/in/justaashir" class="hover:underline flex items-center">
                            <ion-icon name="logo-linkedin" class="mr-2"></ion-icon>
                            LinkedIn
                        </a>
                        <a href="https://twitter.com/justaashir" class="hover:underline flex items-center mt-1">
                            <ion-icon name="logo-twitter" class="mr-2"></ion-icon> Twitter
                        </a>
                        <a href="mailto:hello@justaashir.com" class="hover:underline flex items-center mt-1">
                            <ion-icon name="mail" class="mr-2"></ion-icon> hello@justaashir.com
                        </a>
                        <a href="https://justaashir.com" class="hover:underline flex items-center mt-1">
                            <ion-icon name="globe" class="mr-2"></ion-icon> www.justaashir.com
                        </a>
                    </div>
                </section>
            </div>
            <div class="md:w-2/4 w-full">
                <section class="mt-16 md:mt-0">
                    <h3 class="uppercase text-white font-medium text-3xl">Work Summary</h3>
                    <div class="h-1 bg-green w-48 my-4">
                    </div>
                    <div class="mt-8">
                        <h4 class="font-medium text-green text-2xl">Junior Front-end engineer</h4>
                        <h5 class="text-xl text-green"><a href="https://renetal.com" class="hover:underline">Renetal</a> | <i>2019 - JULY 2020</i></h5>
                        <ul class="text-white list-disc list-inside mt-4">
                            <li> Designed high-performant UI Components </li>
                            <li> Complete SaaS app redesign using VueJs </li>
                            <li> Worked with an amazing remote-team from SIngapore in an agile environment.</li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h4 class="font-medium text-green text-2xl">Founder &lt; CEO</h4>
                        <h5 class="text-xl text-green"><a href="https://justifyagency.com" class="hover:underline">Justify Agency</a> | <i>2020 - Present</i></h5>
                        <ul class="text-white list-disc list-inside mt-4">
                            <li> Meeting with clients to discuss project requirements and workflow. (Includes Startups & Products) </li>
                            <li> Working with distributed network of freelancers </li>
                            <li> Complete Branding & Design System (Email, Social Media, Website, Print) </li>
                        </ul>
                    </div>
                    </sectio>
                    <section class="mt-16">
                        <h3 class="uppercase text-white font-medium text-3xl">Freelance &amp; Other fun stuff</h3>
                        <div class="h-1 bg-green w-48 my-4">
                        </div>
                        <div class="mt-8">
                            <h4 class="font-medium text-green text-2xl">Shopify Freelance Associate</h4>
                            <p class="text-white">
                                Proud member of the shopify community, and their partner program. Setting up Shopify stores and making custom themes from a long time.
                            </p>
                        </div>
                        <div class="mt-8">
                            <h4 class="font-medium text-green text-2xl"><a href="https://dev.to/justaashir" class="hover:underline">DEV Community</a> (Volunteer & Technical Writer)</h4>
                            <ul class="text-white list-disc list-inside mt-4">
                                <li>Have written about Vuejs, career advice and resources...</li>
                                <li> Top 500 Author (Award)</li>
                                <li> 16,000+ Followers + 150K+ Views</li>
                                <li> 5 Badges</li>
                            </ul>
                        </div>
                    </section>
                    <section class="mt-16">
                        <h3 class="uppercase text-white font-medium text-3xl">Passion Projects</h3>
                        <div class="h-1 bg-green w-48 my-4">
                        </div>
                        <div class="mt-8">
                            <h4 class="font-medium text-green text-2xl"><a href="https://tailwindcssuikit.com" class="hover:underline">Tailwind CSS Ui Kit</a></h4>
                            <p class="text-white mt-2">
                                Building this, in my free time. Making modern design systems and kits possible with TailwindCSS
                            </p>
                        </div>
                        <div class="mt-8">
                            <h4 class="font-medium text-green text-2xl"><a href="https://remoteworkjar.com" class="hover:underline">RemoteWorkJar</a></h4>
                            <p class="text-white mt-2">Remote Job Board, where the main focus is to manually screen every job posted and help candidates get high-quality remote-only job postings.</p>
                        </div>
                    </section>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    @include('/blog/layouts.footer')
    <livewire:scripts />
    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    <!-- Chart line -->
    <script>
    const labels = ["January", "February", "March", "April", "May", "June"];
    const data = {
        labels: labels,
        datasets: [{
            label: "Streak Progress",
            backgroundColor: "hsl(250, 100%, 50%)",
            borderColor: "hsl(250, 100%, 50%)",
            data: [0, 10, 5, 2, 20, 30, 45],
        }, ],
    };

    const configLineChart = {
        type: "line",
        data,
        options: {},
    };
    for (let i = 0; i < 100; i++) {
        var chartLine = new Chart(
            document.getElementById("chartLine" + i),
            configLineChart
        );
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
