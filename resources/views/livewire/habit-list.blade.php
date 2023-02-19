<div>
    <div>
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-24">
            <!-- Add Habit --->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 mb-4 dark:bg-gray-800 mx-auto">
                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3 p-6">
                    <form class="space-y-6" action="#">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Add new Habit</h5>
                        <div>
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input wire:model="state.title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('title') border-red-500 @enderror" placeholder="Your Habit title..." required>
                        </div>
                        <div>
                            <label for="underline_select" class="sr-only">Category</label>
                            <select id="underline_select" wire:model="state.category" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option value="">Select a category</option>
                                <option value="personal">Personal</option>
                                <option value="work">Work</option>
                                <option value="others">Other</option>
                            </select>
                        </div>
                        @if ($updateMode)
                        <button type="submit" wire:click.prevent="update" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                        @else
                        <button type="submit" wire:click.prevent="store" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                        @endif
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
            <!-- Habits list --->
            <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
                <div class="md:flex lg:flex xl:flex justify-between bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3 p-6">
                    <div class="w-full overflow-x-auto relative shadow-md sm:rounded-lg m-3 mr-3">
                        <div class="text-center py-4 bg-white dark:bg-gray-800">
                            <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Your Habits</h5>
                        </div>
                        <div class="w-full bg-gray-800 border rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <div class="sm:hidden">
                                <label for="tabs" class="sr-only">Select tab</label>
                                <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>All</option>
                                    <option>Personal</option>
                                    <option>Work</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                                <li class="w-full">
                                    <button id="personal-tab" data-tabs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Personal</button>
                                </li>
                                <li class="w-full">
                                    <button id="work-tab" data-tabs-target="#work" type="button" role="tab" aria-controls="work-tab" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Work</button>
                                </li>
                                <li class="w-full">
                                    <button id="others-tab" data-tabs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Others</button>
                                </li>
                            </ul>
                            <div id="fullWidthTabContent">
                                <div class="hidden p-4 bg-white md:p-8 dark:bg-gray-800" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                    <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
                                        @forelse ($personal_habits as $habit)
                                        <ul class="my-4 space-y-3">
                                            <li>
                                                <div id="accordion-collapse" data-accordion="collapse">
                                                    <h2 id="all-collapse-heading-{{ $habit->id }}">
                                                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                            @if ($habit->category === 'personal')
                                                            <ion-icon name="people-outline"></ion-icon>
                                                            @elseif ($habit->category === 'work')
                                                            <ion-icon name="calendar-outline"></ion-icon>
                                                            @else
                                                            <ion-icon name="grid-outline"></ion-icon>
                                                            @endif
                                                            <span class="flex-1 ml-3 whitespace-nowrap">{{ $habit->title }}</span>
                                                            <button type="submit" data-accordion-target="#all-collapse-body-{{ $habit->id }}" aria-expanded="true" aria-controls="all-collapse-body-{{ $habit->id }}" class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400"><svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                                </svg></button>
                                                        </a>
                                                    </h2>
                                                    <div id="all-collapse-body-{{ $habit->id }}" class="hidden" aria-labelledby="all-collapse-heading-1">
                                                        <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                            <div class="shadow-lg rounded-lg overflow-hidden">
                                                                <div class="py-3 px-5 dark:bg-gray-900 text-center">
                                                                    <button data-tooltip-target="complete-task" wire:click.prevent="completeHabit({{ $habit->id }})" class="inline-block text-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 15 15" stroke="green">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                                                        </svg>
                                                                    </button>
                                                                    <div id="complete-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700  rounded-lg shadow-sm opacity-0 tooltip">
                                                                        Mark as complet today
                                                                    </div>
                                                                    <button data-tooltip-target="edit-task" type="submit" wire:click.prevent="edit({{ $habit->id }})" class="inline-block text-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="blue">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                    </button>
                                                                    <div id="edit-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                                        Edit
                                                                    </div>
                                                                    <button data-tooltip-target="delete-task" class="inline-block text-center" wire:click.prevent="delete({{ $habit->id }})">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                    </button>
                                                                    <div id="delete-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                                        delete
                                                                    </div>
                                                                </div>
                                                                <canvas class="p-10" id="chartLine{{ $habit->id }}"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        @empty
                                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <p class="text-center font-normal text-gray-500 mt-6">No Habits yet, Add new habits and keep tracking your steak...</p>
                                        </tr>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="hidden p-4 bg-white md:p-8 dark:bg-gray-800" id="work" role="tabpanel" aria-labelledby="work-tab">
                                    <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
                                        @forelse ($work_habits as $habit)
                                        <ul class="my-4 space-y-3">
                                            <li>
                                                <div id="accordion-collapse" data-accordion="collapse">
                                                    <h2 id="all-collapse-heading-{{ $habit->id }}">
                                                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                            @if ($habit->category === 'personal')
                                                            <ion-icon name="people-outline"></ion-icon>
                                                            @elseif ($habit->category === 'work')
                                                            <ion-icon name="calendar-outline"></ion-icon>
                                                            @else
                                                            <ion-icon name="grid-outline"></ion-icon>
                                                            @endif
                                                            <span class="flex-1 ml-3 whitespace-nowrap">{{ $habit->title }}</span>
                                                            <button type="submit" data-accordion-target="#all-collapse-body-{{ $habit->id }}" aria-expanded="true" aria-controls="all-collapse-body-{{ $habit->id }}" class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400"><svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                                </svg></button>
                                                        </a>
                                                    </h2>
                                                    <div id="all-collapse-body-{{ $habit->id }}" class="hidden" aria-labelledby="all-collapse-heading-1">
                                                        <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                            <div class="shadow-lg rounded-lg overflow-hidden">
                                                                <div class="py-3 px-5 dark:bg-gray-900 text-center">
                                                                    <button data-tooltip-target="complete-task" class="inline-block text-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 15 15" stroke="green">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                                                        </svg>
                                                                    </button>
                                                                    <div id="complete-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700  rounded-lg shadow-sm opacity-0 tooltip">
                                                                        Mark as complet today
                                                                    </div>
                                                                    <button data-tooltip-target="edit-task" type="submit" class="inline-block text-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="blue">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                    </button>
                                                                    <div id="edit-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                                        Edit
                                                                    </div>
                                                                    <button data-tooltip-target="delete-task" class="inline-block text-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                    </button>
                                                                    <div id="delete-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                                        delete
                                                                    </div>
                                                                </div>
                                                                <canvas class="p-10" id="chartLine{{ $habit->id }}"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        @empty
                                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <p class="text-center font-normal text-gray-500 mt-6">No Habits yet, Add new habits and keep tracking your steak...</p>
                                        </tr>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="hidden p-4 bg-white md:p-8 dark:bg-gray-800" id="others" role="tabpanel" aria-labelledby="others-tab">
                                    <div class="w-full p-12 bg-white shadow-md sm:p-6 dark:bg-gray-800">
                                        @forelse ($other_habits as $habit)
                                        <ul class="my-4 space-y-3">
                                            <li>
                                                <div id="accordion-collapse" data-accordion="collapse">
                                                    <h2 id="all-collapse-heading-{{ $habit->id }}">
                                                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                                            @if ($habit->category === 'personal')
                                                            <ion-icon name="people-outline"></ion-icon>
                                                            @elseif ($habit->category === 'work')
                                                            <ion-icon name="calendar-outline"></ion-icon>
                                                            @else
                                                            <ion-icon name="grid-outline"></ion-icon>
                                                            @endif
                                                            <span class="flex-1 ml-3 whitespace-nowrap">{{ $habit->title }}</span>
                                                            <button type="submit" data-accordion-target="#all-collapse-body-{{ $habit->id }}" aria-expanded="true" aria-controls="all-collapse-body-{{ $habit->id }}" class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400"><svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                                </svg></button>
                                                        </a>
                                                    </h2>
                                                    <div id="all-collapse-body-{{ $habit->id }}" class="hidden" aria-labelledby="all-collapse-heading-1">
                                                        <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                            <div class="shadow-lg rounded-lg overflow-hidden">
                                                                <div class="py-3 px-5 dark:bg-gray-900 text-center">
                                                                    <button data-tooltip-target="complete-task" class="inline-block text-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 15 15" stroke="green">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                                                        </svg>
                                                                    </button>
                                                                    <div id="complete-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700  rounded-lg shadow-sm opacity-0 tooltip">
                                                                        Mark as complet today
                                                                    </div>
                                                                    <button data-tooltip-target="edit-task" type="submit" class="inline-block text-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="blue">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                        </svg>
                                                                    </button>
                                                                    <div id="edit-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                                        Edit
                                                                    </div>
                                                                    <button data-tooltip-target="delete-task" class="inline-block text-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                    </button>
                                                                    <div id="delete-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                                        delete
                                                                    </div>
                                                                </div>
                                                                <canvas class="p-10" id="chartLine{{ $habit->id }}"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        @empty
                                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <p class="text-center font-normal text-gray-500 mt-6">No Habits yet, Add new habits and keep tracking your steak...</p>
                                        </tr>
                                        @endforelse
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
