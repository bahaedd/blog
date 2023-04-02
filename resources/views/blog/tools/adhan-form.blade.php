@extends('blog/main')
@section('content')
<section class="bg-gray-50 dark:bg-gray-800 mt-12">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-600 dark:border-gray-900 mb-6">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    {{ __('Login') }}
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="w-full">
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <select id="city" name="city" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="" disabled selected>Select a city</option>
                            <option value="Agadir">Agadir</option>
                            <option value="Al Hoceima">Al Hoceima</option>
                            <option value="Casablanca">Casablanca</option>
                            <option value="El Jadida">El Jadida</option>
                            <option value="Essaouira">Essaouira</option>
                            <option value="Fes">Fes</option>
                            <option value="Ifrane">Ifrane</option>
                            <option value="Kenitra">Kenitra</option>
                            <option value="Marrakech">Marrakech</option>
                            <option value="Meknes">Meknes</option>
                            <option value="Nador">Nador</option>
                            <option value="Ouarzazate">Ouarzazate</option>
                            <option value="Oujda">Oujda</option>
                            <option value="Rabat">Rabat</option>
                            <option value="Safi">Safi</option>
                            <option value="Tangier">Tangier</option>
                            <option value="Taza">Taza</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection