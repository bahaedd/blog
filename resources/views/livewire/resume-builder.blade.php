<div>
    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-24">
        <div class="w-full bg-gray-800 border rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select tab</label>
                <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Informations</option>
                    <option>Preview</option>
                </select>
            </div>
            <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                <li class="w-full">
                    <button id="personal-tab" data-tabs-target="#personal" type="button" role="tab" aria-controls="personal-tab" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Informations</button>
                </li>
                <li class="w-full">
                    <button id="preview-tab" data-tabs-target="#preview" type="button" role="tab" aria-controls="preview-tab" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Preview</button>
                </li>
            </ul>
            <div id="fullWidthTabContent">
                <!-- Informations --->
                <div class="p-4 bg-white md:p-8 dark:bg-gray-800" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                    <!-- Personal informations --->
                    <div class="w-full p-12 bg-white shadow-md border border-gray-700 rounded-lg mb-6 sm:p-6 dark:bg-gray-800">
                        <h6 class="my-4 mb-3 text-2xl text-center font-semibold text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-700">Personal Informations</h2>
                            <form action="#" enctype="multipart/form-data">
                                <div class="grid gap-6 mb-6 md:grid-cols-2 p-16">
                                    <div>
                                        @if($personal_informations)
                                        <div class="flex items-center justify-center w-full">
                                            <img src="{{URL('/storage/profiles/'.$personal_informations->image)}}" class="h-auto max-w-full rounded-lg" alt="{{ $personal_informations->name }}" width="230" height="160">
                                        </div>
                                        @else
                                        <div class="flex items-center justify-center w-full">
                                            <img src="{{URL('/images/guest.jpg')}}" class="h-auto max-w-full rounded-lg" alt="{{ Auth::user()->name }}" width="230" height="160">
                                        </div>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-center w-full">
                                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-700 dark:hover:bg-bray-800 dark:bg-gray-900 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="blue" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                                    </svg>
                                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">Update your resume picture</p>
                                                </div>
                                                <input id="dropzone-file" wire:model="statePersonalInfo.image" type="file" class="hidden" />
                                            </label>
                                            @error('image')
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input type="text" id="name" wire:model="statePersonalInfo.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}">
                                        @error('name')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
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
                                        @error('birthday')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                                        <input type="text" id="nationality" wire:model="statePersonalInfo.nationality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nationality">
                                        @error('nationality')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                                        <input type="email" id="email" wire:model="statePersonalInfo.email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ Auth::user()->email }}" placeholder="{{ Auth::user()->email }}">
                                        @error('email')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                        <input type="text" id="address" wire:model="statePersonalInfo.address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Adress">
                                        @error('address')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                                        <input type="tel" id="phone" wire:model="statePersonalInfo.phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Phone number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                        @error('phone_number')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                                        <input type="url" id="website" wire:model="statePersonalInfo.website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example.com">
                                        @error('website')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="linkedin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LinkedIn</label>
                                        <input type="text" id="linkedin" wire:model="statePersonalInfo.linkedin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="LinkedIn Profile link">
                                        @error('linkedin')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="twitter" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Twitter</label>
                                        <input type="text" id="twitter" wire:model="statePersonalInfo.twitter" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Twitter Profile link">
                                        @error('twitter')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="github" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Github</label>
                                        <input type="text" id="github" wire:model="statePersonalInfo.github" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Github Profile link">
                                        @error('github')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
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
                    <!-- Summary informations --->
                    <div class="w-full p-12 bg-white shadow-md border border-gray-700 rounded-lg mb-6 sm:p-6 dark:bg-gray-800">
                        <h6 class="my-4 mb-3 text-2xl text-center font-semibold text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-700">Summary</h2>
                            <form class="bg-white border border-gray-200 rounded-lg shadow-md sm:p-3 lg:p-3 mt-3 dark:bg-gray-800 dark:border-gray-700" action="#">
                                <div class="w-full p-12">
                                    <div>
                                        <label for="summary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summary</label>
                                        <textarea id="summary" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-900 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="stateSummary.summary"></textarea>
                                        @error('summary')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    @if ($updateSummary)
                                    <button type="submit" wire:click.prevent="updateSummary" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                    @else
                                    <button type="submit" wire:click.prevent="storeSummary" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                    @endif
                                </div>
                            </form>
                    </div>
                    <!-- Education informations --->
                    <div class="w-full p-12 bg-white shadow-md border border-gray-700 rounded-lg mb-6 sm:p-6 dark:bg-gray-800">
                        <h6 class="my-4 mb-3 text-2xl text-center font-semibold text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-700">Education</h2>
                            <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3 mb-3">
                                @forelse($educations as $education)
                                <div class="group p-5 font-light border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <ol class="pl-5 mt-2 space-y-1 list-none list-inside">
                                            <li class="mb-3 text-center">
                                                <button data-tooltip-target="edit-edu" type="submit" class="inline-block text-center" wire:click.prevent="editEducation({{ $education->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="blue">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </button>
                                                <div id="edit-edu" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                    Edit
                                                </div>
                                                <button data-tooltip-target="delete-edu" class="inline-block text-center" wire:click.prevent="deleteEducation({{ $education->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                                <div id="delete-edu" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                    delete
                                                </div>
                                            </li>
                                            <li>Degree: {{ $education->degree }}</li>
                                            <li>Score: {{ $education->score }}</li>
                                            <li>Speciality: {{ $education->description }}</li>
                                            <li>School: {{ $education->school }}</li>
                                            <li>Date: {{ $education->starts }} / {{ $education->starts }}</li>
                                        </ol>
                                    </ul>
                                </div>
                                @empty
                                <p class="font-normal text-gray-500 mt-6">Add your degrees here</p>
                                @endforelse
                            </div>
                            <form class="bg-white border border-gray-200 rounded-lg shadow-md sm:p-3 lg:p-3 mt-3 dark:bg-gray-800 dark:border-gray-700" action="#">
                                <div class="grid gap-6 mb-3 md:grid-cols-2 p-16 mt-6">
                                    <div>
                                        <label for="degree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree</label>
                                        <input type="text" id="degree" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Degree" wire:model="stateEducation.degree">
                                        @error('degree')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="score" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Score</label>
                                        <input type="text" id="score" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Score" wire:model="stateEducation.score">
                                        @error('score')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School / University</label>
                                        <input type="text" id="school" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="School or University" wire:model="stateEducation.school">
                                        @error('school')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description (Speciality)</label>
                                        <input type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Speciality" wire:model="stateEducation.description">
                                        @error('description')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="start-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Starts at</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input value="2017-06-01" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" wire:model="stateEducation.starts">
                                        </div>
                                        @error('starts')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="end-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ends at</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input value="2017-06-01" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" wire:model="stateEducation.ends">
                                        </div>
                                        @error('ends')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    @if ($updateEdu)
                                    <button type="submit" wire:click.prevent="updateEducation" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                    @else
                                    <button type="submit" wire:click.prevent="storeEducation" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                    @endif
                                </div>
                            </form>
                    </div>
                    <!-- Work informations --->
                    <div class="w-full p-12 bg-white shadow-md border border-gray-700 rounded-lg mb-6 sm:p-6 dark:bg-gray-800">
                        <h6 class="my-4 mb-3 text-2xl text-center font-semibold text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-700">Work Experience</h2>
                            <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3 mb-3">
                                @forelse($works as $work)
                                <div class="group p-5 font-light border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <ol class="pl-5 mt-2 space-y-1 list-none list-inside">
                                            <li class="mb-3 text-center">
                                                <button data-tooltip-target="edit-edu" type="submit" class="inline-block text-center" wire:click.prevent="editWork({{ $work->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="blue">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </button>
                                                <div id="edit-edu" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                    Edit
                                                </div>
                                                <button data-tooltip-target="delete-edu" class="inline-block text-center" wire:click.prevent="deleteWork({{ $work->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                                <div id="delete-edu" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                    delete
                                                </div>
                                            </li>
                                            <li>Profession: {{ $work->position }}</li>
                                            <li>Company: {{ $work->company }}</li>
                                            <li>Date: {{ $work->starts }} / {{ $work->ends }}</li>
                                            <li>{{ $work->description }}</li>
                                        </ol>
                                    </ul>
                                </div>
                                @empty
                                <p class="font-normal text-gray-500 mt-6">Add your Work Experience here</p>
                                @endforelse
                            </div>
                            <form class="bg-white border border-gray-200 rounded-lg shadow-md sm:p-3 lg:p-3 mt-3 dark:bg-gray-800 dark:border-gray-700" action="#">
                                <div class="grid gap-6 mb-6 md:grid-cols-2 p-16 mt-12">
                                    <div>
                                        <label for="profession" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profession</label>
                                        <input type="text" id="profession" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Profession" wire:model="stateWork.profession">
                                        @error('profession')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                        <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Company" wire:model="stateWork.company">
                                        @error('company')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="start-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Starts at</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input value="2017-06-01" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" wire:model="stateWork.starts">
                                        </div>
                                        @error('starts')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="end-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ends at</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input value="2017-06-01" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" wire:model="stateWork.ends">
                                        </div>
                                        @error('ends')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description" wire:model="stateWork.description"></textarea>
                                        @error('description')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    @if ($updateWork)
                                    <button type="submit" wire:click.prevent="updateWork" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                    @else
                                    <button type="submit" wire:click.prevent="storeWork" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                    @endif
                                </div>
                            </form>
                    </div>
                    <!-- skills informations --->
                    <div class="w-full p-12 bg-white shadow-md border border-gray-700 rounded-lg mb-6 sm:p-6 dark:bg-gray-800">
                        <h6 class="my-4 mb-3 text-2xl text-center font-semibold text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-700">Skills</h2>
                            <div class="grid gap-6 mb-6 md:grid-cols-2 p-16 mt-12">
                                @forelse($skills as $skill)
                                <div class="border border-gray-200 dark:border-gray-700 dark:bg-gray-900 p-12">
                                    <div class="text-center">
                                        <button data-tooltip-target="edit-edu" type="submit" class="inline-block text-center" wire:click.prevent="editSkill({{ $skill->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="blue">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </button>
                                        <div id="edit-edu" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                            Edit
                                        </div>
                                        <button data-tooltip-target="delete-edu" class="inline-block text-center" wire:click.prevent="deleteWork({{ $skill->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                        <div id="delete-edu" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                            delete
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-base font-medium text-blue-700 dark:text-white">{{ $skill->title }}</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $skill->level }}%"></div>
                                    </div>
                                </div>
                                @empty
                                <p class="font-normal text-gray-500 mt-6">Add your Skill here</p>
                                @endforelse
                            </div>
                            <form class="bg-white border border-gray-200 rounded-lg shadow-md sm:p-3 lg:p-3 mt-3 dark:bg-gray-800 dark:border-gray-700" action="#">
                                <div class="grid gap-6 mb-6 md:grid-cols-2 p-16 mt-12">
                                    <div>
                                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Skill</label>
                                        <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Skill" wire:model="stateSkill.title">
                                        @error('title')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <label for="level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Level</label>
                                        <input id="level" type="range" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" wire:model="stateSkill.level">
                                        @error('level')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    @if ($updateSkill)
                                    <button type="submit" wire:click.prevent="updateSkill" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                    @else
                                    <button type="submit" wire:click.prevent="storeSkill" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                    @endif
                                </div>
                            </form>
                    </div>
                    <!-- Languages informations --->
                    <div class="w-full p-12 bg-white shadow-md border border-gray-700 rounded-lg mb-6 sm:p-6 dark:bg-gray-800">
                        <h6 class="my-4 mb-3 text-2xl text-center font-semibold text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-700">Languages</h2>
                            <form class="bg-white border border-gray-200 rounded-lg shadow-md sm:p-3 lg:p-3 mt-3 dark:bg-gray-800 dark:border-gray-700" action="#">
                                <div class="grid gap-6 mb-6 md:grid-cols-2 p-16 mt-12">
                                    @foreach($languages as $language)
                                    <div>
                                        <div class="flex justify-between p-3 text-base font-bold text-white rounded-lg bg-gray-900 hover:bg-gray-100 group hover:shadow dark:bg-gray-900 dark:hover:bg-gray-500 dark:text-white">
                                            <span class="flex-1 ml-3 whitespace-nowrap">{{ $language->language }}</span>
                                            <div class="flex-2">
                                                <button data-tooltip-target="delete-edu" class="inline-block text-center" wire:click.prevent="deleteLang({{ $language->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                                <div id="delete-edu" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                    delete
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="w-full p-12">
                                    <label for="language" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>
                                    <input type="text" id="language" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Example: English: Read, Speak, Write" wire:model="stateLang.language">
                                    @error('language')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                    @enderror
                                </div>
                                <div class="text-center mb-3">
                                    @if ($updateLang)
                                    <button type="submit" wire:click.prevent="updateLang" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                    @else
                                    <button type="submit" wire:click.prevent="storeLang" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                    @endif
                                </div>
                            </form>
                    </div>
                    <!-- Projects informations --->
                    <div class="w-full p-12 bg-white shadow-md border border-gray-700 rounded-lg mb-6 sm:p-6 dark:bg-gray-800">
                        <h6 class="my-4 mb-3 text-2xl text-center font-semibold text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-700">Projects</h2>
                            <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3 mb-3">
                                @forelse($projects as $project)
                                <div class="group p-5 font-light border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">
                                        <ol class="pl-5 mt-2 space-y-1 list-none list-inside">
                                            <li class="mb-3 text-center">
                                                <button data-tooltip-target="edit-edu" type="submit" class="inline-block text-center" wire:click.prevent="editProject({{ $project->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="blue">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </button>
                                                <div id="edit-edu" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                    Edit
                                                </div>
                                                <button data-tooltip-target="delete-edu" class="inline-block text-center" wire:click.prevent="deleteProject({{ $project->id }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                                <div id="delete-edu" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                    delete
                                                </div>
                                            </li>
                                            <li>Name: {{ $project->title }}</li>
                                            <li>Tools: {{ $project->tools }}</li>
                                            <li>Date: {{ $project->date }}</li>
                                            <li>{{ $project->description }}</li>
                                        </ol>
                                    </ul>
                                </div>
                                @empty
                                <p class="font-normal text-gray-500 mt-6">Add your projects here</p>
                                @endforelse
                            </div>
                            <form class="bg-white border border-gray-200 rounded-lg shadow-md sm:p-3 lg:p-3 mt-3 dark:bg-gray-800 dark:border-gray-700" action="#">
                                <div class="grid gap-6 mb-3 md:grid-cols-2 p-16 mt-6">
                                    <div>
                                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                        <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your project name" wire:model="stateProject.title">
                                        @error('title')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="tools" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tools</label>
                                        <input type="text" id="tools" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tools" wire:model="stateProject.tools">
                                        @error('tools')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input value="2017-06-01" type="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" wire:model="stateProject.date">
                                        </div>
                                        @error('date')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                        <textarea id="description" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description" wire:model="stateProject.description"></textarea>
                                        @error('description')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</span></p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    @if ($updateProject)
                                    <button type="submit" wire:click.prevent="updateProject" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                    @else
                                    <button type="submit" wire:click.prevent="storeProject" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                    @endif
                                </div>
                            </form>
                    </div>
                </div>
                <!-- Preview --->
                <div class="hidden p-4 bg-white md:p-8 dark:bg-gray-800" id="preview" role="tabpanel" aria-labelledby="preview-tab">
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
                                                <h5 class="text-xl text-gray-500 dark:text-white"><i>{{ $education->starts }} - {{ $education->ends }}</i></h5>
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
                                                <h5 class="text-xl text-gray-500 dark:text-white"><i>{{ $work->starts }} - {{ $work->ends }}</i></h5>
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
                                                <h5 class="text-xl text-gray-500 dark:text-white"><i>{{ $project->date }} | {{ $project->tools }}</i></h5>
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
                    <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
                        <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
                            <div class="bg-dark-gray w-full min-h-screen rounded-lg border border-green-600 shadow-md p-6 border border-green-600">
                                <div class="w-full max-w-6xl mx-auto px-4 py-8 flex justify-between md:flex-no-wrap flex-wrap">
                                    <div class="md:w-1/3 w-full">
                                        <header>
                                            @if($personal_informations)
                                            <img src="{{URL('/storage/profiles/'.$personal_informations->image)}}" class="h-36 rounded-full sm:h-56" alt="{{ $personal_informations->name }}" width="230" height="160">
                                            <div class="text-gray-500 dark:text-white mt-4">
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
                                            <p class="text-gray-500 dark:text-white">I am a motivated team player and aspiring web developer with great design and branding knowledge. My ultimate goal is to grow my knowledge of the industry and use my conversational skills to help fast-paced startup design UI/UX charismas.</p>
                                        </section>
                                        <section class="mt-16">
                                            <h3 class="uppercase text-white font-medium text-3xl">Skills</h3>
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
                                            <h3 class="uppercase text-gray-500 font-medium text-3xl dark:text-white">Education Summary</h3>
                                            <div class="h-1 bg-green w-48 my-4">
                                            </div>
                                            @foreach($educations as $education)
                                            <div class="mt-8">
                                                <h4 class="font-medium text-gray-500 text-2xl dark:text-white">Degree: {{ $education->degree }}</h4>
                                                <h5 class="text-xl text-gray-500 dark:text-white"><i>{{ $education->starts }} - {{ $education->ends }}</i></h5>
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
                                                <h4 class="font-medium text-gray-500 text-2xl dark:text-white">{{ $work->position }}</h4>
                                                <h5 class="text-xl text-gray-500 dark:text-white"><i>{{ $work->starts }} - {{ $work->ends }}</i></h5>
                                                <ul class="text-gray-500 list-disc list-inside mt-4 dark:text-white">
                                                    <li>Company: {{ $work->company }}</li>
                                                    <li>{{ $work->description }}</li>
                                                </ul>
                                            </div>
                                            @endforeach
                                        </section>
                                        {{-- <section class="mt-16">
                                            <h3 class="uppercase text-white font-medium text-3xl">Freelance &amp; Other fun stuff</h3>
                                            <div class="h-1 bg-green w-48 my-4">
                                            </div>
                                            <div class="mt-8">
                                                <h4 class="font-medium text-gray-500 text-2xl">Shopify Freelance Associate</h4>
                                                <p class="text-white">
                                                    Proud member of the shopify community, and their partner program. Setting up Shopify stores and making custom themes from a long time.
                                                </p>
                                            </div>
                                            <div class="mt-8">
                                                <h4 class="font-medium text-gray-500 text-2xl"><a href="https://dev.to/justaashir" class="hover:underline">DEV Community</a> (Volunteer & Technical Writer)</h4>
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
                                                <h4 class="font-medium text-gray-500 text-2xl"><a href="https://tailwindcssuikit.com" class="hover:underline">Tailwind CSS Ui Kit</a></h4>
                                                <p class="text-white mt-2">
                                                    Building this, in my free time. Making modern design systems and kits possible with TailwindCSS
                                                </p>
                                            </div>
                                            <div class="mt-8">
                                                <h4 class="font-medium text-gray-500 text-2xl"><a href="https://remoteworkjar.com" class="hover:underline">RemoteWorkJar</a></h4>
                                                <p class="text-white mt-2">Remote Job Board, where the main focus is to manually screen every job posted and help candidates get high-quality remote-only job postings.</p>
                                            </div>
                                        </section> --}}
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
