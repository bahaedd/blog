<div>
    <div>
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-24">
            <!-- Add Task --->
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/3 mb-4 dark:bg-gray-800 mx-auto">
                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3 p-6">
                    <form class="space-y-6" action="#">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Add new Task</h5>
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
            <!-- Tasks list --->
            <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
                <div class="md:flex lg:flex xl:flex justify-between bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3 p-6">
                    <!-- Your Tasks --->
                    <div class="w-full overflow-x-auto relative shadow-md sm:rounded-lg m-3 mr-3">
                        <div class="text-center py-4 bg-white dark:bg-gray-800">
                            <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Your Tasks</h5>
                        </div>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                @forelse ($tasks as $task)
                                <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-3 px-3 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="pl-1">
                                            <div class="text-base font-semibold">{{ $task->title }}</div>
                                            <div class="task font-normal text-gray-500">{{ $task->description }}</div>
                                        </div>
                                    </th>
                                    <td class="py-1 px-3">
                                        <div>
                                            <button data-tooltip-target="complete-task" class="inline-block text-center" wire:click.prevent="completeTask({{ $task->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 18 18" stroke="green">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                                </svg>
                                            </button>
                                            <div id="complete-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700  rounded-lg shadow-sm opacity-0 tooltip">
                                            Completed
                                            </div>
                                            <button data-tooltip-target="edit-task" type="submit" class="inline-block text-center" wire:click.prevent="edit({{ $task->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="blue">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </button>
                                            <div id="edit-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                Edit
                                            </div>
                                            <button data-tooltip-target="delete-task" class="inline-block text-center" wire:click.prevent="delete({{ $task->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                            <div id="delete-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                                delete
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <p class="text-center font-normal text-gray-500 mt-6">No Tasks yet, what needs to be done today?</p>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- Completed Tasks --->
                    <div class=" w-full overflow-x-auto relative shadow-md sm:rounded-lg m-3 p-3">
                        <div class="py-1 bg-white text-center dark:bg-gray-800">
                            <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center mr-3">Completed Tasks</h5>
                        </div>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
                            <tbody>
                                @forelse ($completed_tasks as $task)
                                <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-500 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center py-3 px-3 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="pl-1">
                                            <div class="text-base font-semibold">{{ $task->title }}</div>
                                            <div class="task font-normal text-gray-500">{{ $task->description }}</div>
                                        </div>
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $task->completed_at }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <button data-tooltip-target="delete-completed-task" class="inline-block text-center" wire:click.prevent="delete({{ $task->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="red">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                        <div id="delete-completed-task" role="tooltip" class="inline-block absolute invisible z-10 py-1 px-1 text-sm font-medium text-blue-700 rounded-lg shadow-sm opacity-0 tooltip">
                                            delete
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr class="bg-white border dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <p class="text-center font-normal text-gray-500 mt-6">No Completed Tasks yet</p>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="shadow-lg rounded-lg overflow-hidden">
                  <div class="py-3 px-5 bg-gray-800 text-blue-700">Habit Tracker</div>
                  <canvas class="p-10" id="chartLine"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
