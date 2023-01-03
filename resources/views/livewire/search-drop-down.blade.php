<div class="hidden relative mr-3 md:mr-0 md:block">
    <input wire:model.debounce.500ms="search" type="text" id="email-adress-icon" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search...">
    <div class="p-6">
                <ul class="my-4 space-y-3">
                    @foreach ($searchResults as $result)
                    <li class="m-3">
                        <a href="/blog/post/{{ $result->slug }}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <span class="flex-1 ml-3 whitespace-nowrap">{{ $result->title }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
</div>
