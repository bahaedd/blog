<div class="hidden relative mr-3 md:mr-0 md:block">
    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
    </div>
    <input wire:model.debounce.500ms="search" type="text" id="email-adress-icon" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search...">
    <div class="absolute bg-green-600 text-sm rounded w-64 mt-4">
        <ul>
            @foreach ($searchResults as $result)
                <li class="border-b border-gray-700">
                    <a href="/post/{{ $result->slug }}" class="block hover:bg-gray-700 px-3 py-3 text-white">{{ $result->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
