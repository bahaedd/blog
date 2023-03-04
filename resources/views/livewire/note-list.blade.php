<div>
    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-2">
        <!-- Add Habit --->
        {{-- <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 mb-4 dark:bg-gray-800 mx-auto">
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
                    <ion-icon name="chevron-back-outline"></ion-icon> PersonalPack
                </a>
            </div>
        </div> --}}
        <!-- Habits list --->
        <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
            <!-- Modal toggle -->
            <div class="flex justify-center m-5">
                <button id="defaultModalButton" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    New note
                </button>
            </div>
            <!-- Main modal -->
            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                        <!-- Modal header -->
                        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Add New Note
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="#">
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="title" required="">
                                </div>
                                <div>
                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected="">Select category</option>
                                        <option value="TV">TV/Monitors</option>
                                        <option value="PC">PC</option>
                                        <option value="GA">Gaming/Console</option>
                                        <option value="PH">Phones</option>
                                    </select>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                Add new product
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="w-full overflow-x-auto relative shadow-md sm:rounded-lg m-3 mr-3">
                    <div class="flex items-center justify-center space-x-2 my-5">
                        <span class="h-px w-16 bg-gray-100"></span>
                        <span class="text-gray-300 font-normal">Personal notes </span>
                        <span class="h-px w-16 bg-gray-100"></span>
                    </div>
                    <div class="flex flex-wrap">
                        @forelse ($personal_notes as $note)
                        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-4 dark:bg-gray-800">
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
                        </div>
                        @empty
                            <p class="text-center font-normal text-gray-500 mt-6">No notes to show yet...</p>
                            @endforelse
                    </div>
                </div>
            </div>
            <div class="">
                <div class="w-full overflow-x-auto relative shadow-md sm:rounded-lg m-3 mr-3">
                    <div class="flex items-center justify-center space-x-2 my-5">
                        <span class="h-px w-16 bg-gray-100"></span>
                        <span class="text-gray-300 font-normal">Work notes </span>
                        <span class="h-px w-16 bg-gray-100"></span>
                    </div>
                    <div class="flex flex-wrap">
                        @forelse ($work_notes as $note)
                        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-4 dark:bg-gray-800">
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
                        </div>
                         @empty
                            <p class="text-center font-normal text-gray-500 mt-6">No notes to show yet...</p>
                            @endforelse
                    </div>
                </div>
            </div>
            <div class="">
                <div class="w-full overflow-x-auto relative shadow-md sm:rounded-lg m-3 mr-3">
                    <div class="flex items-center justify-center space-x-2 my-5">
                        <span class="h-px w-16 bg-gray-100"></span>
                        <span class="text-gray-300 font-normal">Other notes </span>
                        <span class="h-px w-16 bg-gray-100"></span>
                    </div>
                    <div class="flex flex-wrap">
                        @forelse ($other_notes as $note)
                        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-4 dark:bg-gray-800">
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
                        </div>
                        @empty
                            <p class="text-center font-normal text-gray-500 mt-6">No notes to show yet...</p>
                            @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
