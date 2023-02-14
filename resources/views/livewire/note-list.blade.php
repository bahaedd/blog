<div>
    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-24">
        <!-- note list --->
        <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
            <div class="">
                <div class="w-full overflow-x-auto relative shadow-md sm:rounded-lg m-3 mr-3">
                    <div class="w-full bg-white border shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700 text-center">
                            <ul class=" w-full flex flex-wrap -mb-px text-sm font-medium justify-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Personal</button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Work</button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">others</button>
                                </li>
                            </ul>
                        </div>
                        <div id="myTabContent">
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- drawer init and show -->
                                <div class="text-center">
                                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact" aria-controls="drawer-contact">
                                        Add new note
                                    </button>
                                </div>
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
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="text-center">
                                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact" aria-controls="drawer-contact">
                                        Add new note
                                    </button>
                                </div>
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
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="text-center">
                                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact" aria-controls="drawer-contact">
                                        Add new note
                                    </button>
                                </div>
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
    <!-- drawer component -->
    <div id="drawer-contact" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-contact-label">
        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase dark:text-gray-400"><svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>New Note</h5>
        <button type="button" data-drawer-hide="drawer-contact" aria-controls="drawer-contact" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <form class="space-y-6" action="#">
            <div>
                <label for="underline_select" class="sr-only">Category</label>
                <select id="underline_select" wire:model="state.category" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option value="">Select a category</option>
                    <option value="personal">Personal</option>
                    <option value="work">Work</option>
                    <option value="others">Other</option>
                </select>
            </div>
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input wire:model="state.title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('title') border-red-500 @enderror" placeholder="Your task title..." required>
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description (optional)</label>
                <textarea wire:model="state.description" id="description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('title') border-red-500 @enderror" placeholder="Description..."></textarea>
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
</div>
