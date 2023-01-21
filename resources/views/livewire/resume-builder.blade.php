<div>
    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-24">
        <div class="w-full bg-gray-800 border rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select tab</label>
                <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Personal informations</option>
                    <option>Education</option>
                    <option>Work</option>
                    <option>skills</option>
                    <option>Preview</option>
                </select>
            </div>
            <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                <li class="w-full">
                    <button id="personal-tab" data-tabs-target="#personal" type="button" role="tab" aria-controls="personal-tab" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Personal Informations</button>
                </li>
                <li class="w-full">
                    <button id="education-tab" data-tabs-target="#education" type="button" role="tab" aria-controls="education-tab" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Education</button>
                </li>
                <li class="w-full">
                    <button id="work-tab" data-tabs-target="#work" type="button" role="tab" aria-controls="work-tab" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Work</button>
                </li>
                <li class="w-full">
                    <button id="skills-tab" data-tabs-target="#skills" type="button" role="tab" aria-controls="skills-tab" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Skills</button>
                </li>
                <li class="w-full">
                    <button id="preview-tab" data-tabs-target="#preview" type="button" role="tab" aria-controls="preview-tab" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Preview</button>
                </li>
            </ul>
            <div id="fullWidthTabContent">
                <!-- Personal informations --->
                <div class="p-4 bg-white md:p-8 dark:bg-gray-800" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                    <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
                        <form action="#">
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
                            <div class="grid gap-6 mb-6 md:grid-cols-2 p-16">
                                <div>
                                    <div class="flex items-center justify-center w-full">
                                        <img src="{{URL('/images/profile.jpg')}}" class="h-36 rounded-full sm:h-56" alt="bahaeddine" width="230" height="160">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center justify-center w-full">
                                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="blue" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">Update your resume picture</p>
                                            </div>
                                            <input id="dropzone-file" wire:model="statePersonalInfo.image" type="file" class="hidden" />
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" id="name" wire:model="statePersonalInfo.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}">
                                </div>
                                <div>
                                    <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input value="2017-06-01" type="date" id="birthday" wire:model="statePersonalInfo.birthday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your birthday">
                                    </div>
                                </div>
                                <div>
                                    <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                                    <input type="text" id="nationality" wire:model="statePersonalInfo.nationality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nationality">
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                                    <input type="email" id="email" wire:model="statePersonalInfo.email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ Auth::user()->email }}" placeholder="{{ Auth::user()->email }}">
                                </div>
                                <div>
                                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                    <input type="text" id="address" wire:model="statePersonalInfo.address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Adress">
                                </div>
                                <div>
                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                                    <input type="tel" id="phone" wire:model="statePersonalInfo.phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Phone number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                </div>
                                <div>
                                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                                    <input type="url" id="website" wire:model="statePersonalInfo.website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example.com" >
                                </div>
                                <div>
                                    <label for="linkedin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LinkedIn</label>
                                    <input type="text" id="linkedin" wire:model="statePersonalInfo.linkedin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="LinkedIn Profile link">
                                </div>
                                <div>
                                    <label for="twitter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Twitter</label>
                                    <input type="text" id="twitter" wire:model="statePersonalInfo.twitter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Twitter Profile link">
                                </div>
                                <div>
                                    <label for="github" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Github</label>
                                    <input type="text" id="github" wire:model="statePersonalInfo.github" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Github Profile link" required>
                                </div>
                            </div>
                            <div class="text-center">
                                @if ($updateMode)
                                <button type="submit" wire:click.prevent="updatePersonalInfo" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                @else
                                <button type="submit" wire:click.prevent="storePersonalInfo" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Education informations --->
                <div class="hidden p-4 bg-white md:p-8 dark:bg-gray-800" id="education" role="tabpanel" aria-labelledby="education-tab">
                    <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
                        <div id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                    <span>Baccalaureat</span>
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="grid gap-6 mb-6 md:grid-cols-2 p-16 mt-12">
                                <div>
                                    <label for="degree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                                    <input type="text" id="degree" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                                </div>
                                <div>
                                    <label for="score" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Score</label>
                                    <input type="text" id="score" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                                </div>
                                <div>
                                    <label for="school" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School / University</label>
                                    <input type="text" id="school" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="School or University" required>
                                </div>
                                <div>
                                    <label for="start-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Starts at</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                    </div>
                                </div>
                                <div>
                                    <label for="end-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ends at</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                    </div>
                                </div>
                                <div>
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                                </div>
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- Work informations --->
                <div class="p-4 bg-white md:p-8 dark:bg-gray-800" id="work" role="tabpanel" aria-labelledby="work-tab">
                    <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
                        <div id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                    <span>Laravel Developer</span>
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                                    <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="grid gap-6 mb-6 md:grid-cols-2 p-16 mt-12">
                                <div>
                                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                    <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                                </div>
                                <div>
                                    <label for="profession" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profession</label>
                                    <input type="text" id="profession" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                                </div>
                                <div>
                                    <label for="start-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Starts at</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                    </div>
                                </div>
                                <div>
                                    <label for="end-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ends at</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                                </div>
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                        </form>
                    </div>
                </div>
                <!-- Skills informations --->
                <div class="p-4 bg-white md:p-8 dark:bg-gray-800" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                    <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
                        <div class="grid gap-6 mb-6 md:grid-cols-2 p-16 mt-12">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700 dark:text-white">Laravel</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <div class="flex justify-between mb-1">
                                    <span class="text-base font-medium text-blue-700 dark:text-white">Flowbite</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="grid gap-6 mb-6 md:grid-cols-2 p-16 mt-12">
                                <div>
                                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skill</label>
                                    <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                                </div>
                                <div class="mb-6">
                                    <label for="level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Level</label>
                                    <input id="level" type="range" value="50" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                </div>
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                        </form>
                    </div>
                </div>
                <!-- Preview --->
                <div class="p-4 bg-white md:p-8 dark:bg-gray-800" id="preview" role="tabpanel" aria-labelledby="preview-tab">
                    <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
                        <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
                            <div class="bg-dark-gray w-full min-h-screen rounded-lg border border-green-600 shadow-md p-6 border border-green-600">
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
            </div>
        </div>
    </div>
</div>
