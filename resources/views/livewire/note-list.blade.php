<div>
    <div>
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-24">
            <!-- Add Habit --->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 mb-4 dark:bg-gray-800 mx-auto">
                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3 p-6">
                    <form class="space-y-6" action="#">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">New Note</h5>
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
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description (optional)</label>
                        <textarea wire:model="state.description" id="description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('title') border-red-500 @enderror" placeholder="Description..."></textarea>
                        @if ($updateMode)
                        <button type="submit" wire:click.prevent="update" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                        @else
                        <button type="submit" wire:click.prevent="store" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
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
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="personal" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="grid grid-cols-1 gap-6 pt-3 sm:grid-cols-2 md:gap-10 md:pt-3 lg:grid-cols-3">
                                        @forelse ($personal_notes as $note)
                                        <div class="block shadow-lg bg-yellow-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $note->title }}</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    {{ $note->description }}
                                                </p>
                                            </div>
                                        </div>
                                        @empty
                                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <p class="text-center font-normal text-gray-500 mt-6">No notes to show yet...</p>
                                        </tr>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="work" role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div class="grid grid-cols-1 gap-6 pt-3 sm:grid-cols-2 md:gap-10 md:pt-3 lg:grid-cols-3">
                                        @forelse ($work_notes as $note)
                                        <div class="block shadow-lg bg-yellow-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $note->title }}</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    {{ $note->description }}
                                                </p>
                                            </div>
                                        </div>
                                        @empty
                                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <p class="text-center font-normal text-gray-500 mt-6">No notes to show yet...</p>
                                        </tr>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="others" role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="grid grid-cols-1 gap-6 pt-3 sm:grid-cols-2 md:gap-10 md:pt-3 lg:grid-cols-3">
                                        @forelse ($other_notes as $note)
                                        <div class="block shadow-lg bg-yellow-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $note->title }}</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    {{ $note->description }}
                                                </p>
                                            </div>
                                        </div>
                                        @empty
                                        <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <p class="text-center font-normal text-gray-500 mt-6">No notes to show yet...</p>
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
