<div>
    <div>
        <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mx-24">
            <!-- Notes list --->
            <div class="w-full sm:w-full md:w-full lg:w-full xl:w-full mb-4 dark:bg-gray-800 mx-auto">
                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative w-full h-full max-w-md md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 py-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                                <form class="space-y-6" action="#">
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                            </div>
                                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                        </div>
                                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                                    </div>
                                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                        Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="w-full overflow-x-auto relative shadow-md sm:rounded-lg m-3 mr-3">
                        <div class="w-full bg-gray-800 border shadow-md dark:bg-gray-800 dark:border-gray-700">
                            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                <ul class=" w-full flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                                    </li>
                                    <li role="presentation">
                                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="myTabContent">
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
                                        <div class="block shadow-lg bg-yellow-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="block shadow-lg bg-green-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="block shadow-lg bg-blue-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
                                        <div class="block shadow-lg bg-yellow-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="block shadow-lg bg-green-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="block shadow-lg bg-blue-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
                                        <div class="block shadow-lg bg-yellow-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="block shadow-lg bg-green-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="block shadow-lg bg-blue-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                    <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
                                        <div class="block shadow-lg bg-yellow-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="block shadow-lg bg-green-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="block shadow-lg bg-blue-300 max-w-sm text-center m-12">
                                            <div class="py-3 px-6 border-b border-gray-300">
                                                <ion-icon name="attach" size="large"></ion-icon>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium mb-2">Special title treatment</h5>
                                                <p class="text-gray-700 text-base mb-6">
                                                    With supporting text below as a natural lead-in to additional content.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-dial-init class="fixed right-6 bottom-6 group">
                                <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                                    <svg aria-hidden="true" class="w-8 h-8 transition-transform group-hover:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    <span class="sr-only">Open actions menu</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
