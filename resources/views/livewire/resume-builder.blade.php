<div>
    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-24">
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 mb-4 dark:bg-gray-800 mx-auto">
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3 p-6">
                <form class="space-y-6" action="#">
                    <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Add Your Informations</h5>
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input wire:model="state.title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('title') border-red-500 @enderror" placeholder="Your task title..." required>
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description (optional)</label>
                        <textarea wire:model="state.description" id="description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('title') border-red-500 @enderror" placeholder="Description..."></textarea>
                    </div>
                    <button type="submit" wire:click.prevent="update" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                    <button type="submit" wire:click.prevent="store" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                </form>
                @if ($errors->any())
                <div class="flex p-4 mt-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        @foreach ($errors->all() as $error)
                        <span class="font-medium">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            <div class="flex justify-items-center mt-12 ml-3">
                <a href="{{ route('personalpack') }}" class="text-green-700 mt-4 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                    <ion-icon name="chevron-back-outline"></ion-icon> Back to PersonalPack
                </a>
            </div>
        </div>
        <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
            <div class="bg-dark-gray w-full min-h-screen rounded-lg border border-gray-200 shadow-md p-6">
                <div class="w-full max-w-6xl mx-auto px-4 py-8 flex justify-between md:flex-no-wrap flex-wrap">
                    <div class="md:w-1/3 w-full">
                        <header>
                            <img src="{{URL('/images/profile.jpg')}}" class="h-36 rounded-full sm:h-56" alt="bahaeddine" width="230" height="160">
                            <div class="text-white mt-4">
                                <a href="https://linkedin.com/in/justaashir" class="hover:underline flex items-center">
                                    <ion-icon name="logo-linkedin" class="mr-2"></ion-icon>
                                    LinkedIn
                                </a>
                                <a href="https://twitter.com/justaashir" class="hover:underline flex items-center mt-1">
                                    <ion-icon name="logo-twitter" class="mr-2"></ion-icon> Twitter
                                </a>
                                <a href="mailto:sihassi.bahaeddine@gmail.com" class="hover:underline flex items-center mt-1">
                                    <ion-icon name="mail" class="mr-2"></ion-icon> sihassi.bahaeddine@gmail.com
                                </a>
                                <a href="https://aliendev.com" class="hover:underline flex items-center mt-1">
                                    <ion-icon name="globe" class="mr-2"></ion-icon> aliendev.com
                                </a>
                            </div>
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
        </div>
    </div>
</div>
