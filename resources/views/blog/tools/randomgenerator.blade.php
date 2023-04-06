<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('/blog/layouts.head')

<body class="border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
    @include('/blog/layouts.navbar')
    <div class="px-16 mx-auto py-16 md:py-20 mb-72">
        <h2 class="my-4 mb-12 text-4xl text-center font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700">Random Generator</h2>
        <form class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 mt-12" action="{{url('/projects/randomgenerator/generate')}}" method="post">
            @csrf
            <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal rounded border border-gray-500 p-12">
                <fieldset>
                    <legend class="sr-only">Checkbox variants</legend>
                    <div class="flex items-center mb-4">
                        <input checked id="checkbox-1" type="checkbox" name="string[]" value="upper" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">A-Z</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input checked id="checkbox-1" type="checkbox" name="string[]" value="lower" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">a-z</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input checked id="checkbox-1" type="checkbox" name="string[]" value="numbers" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">0-9</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="number" name="length" id="length" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="length" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Length</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="number" name="num" id="num" max="10" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="num" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Number</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="region" class="mb-2 text-sm font-medium text-gray-700">Region</label>
                              <select id="region" name="region" class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="us-east-1">US East (N. Virginia)</option>
                                <option value="us-east-2">US East (Ohio)</option>
                                <option value="us-west-1">US West (N. California)</option>
                                <option value="us-west-2">US West (Oregon)</option>
                                <option value="ca-central-1">Canada (Central)</option>
                                <option value="sa-east-1">South America (São Paulo)</option>
                                <option value="eu-west-1">Europe (Ireland)</option>
                                <option value="eu-west-2">Europe (London)</option>
                                <option value="eu-west-3">Europe (Paris)</option>
                                <option value="eu-central-1">Europe (Frankfurt)</option>
                                <option value="eu-north-1">Europe (Stockholm)</option>
                                <option value="ap-south-1">Asia Pacific (Mumbai)</option>
                                <option value="ap-southeast-1">Asia Pacific (Singapore)</option>
                                <option value="ap-southeast-2">Asia Pacific (Sydney)</option>
                                <option value="ap-northeast-1">Asia Pacific (Tokyo)</option>
                                <option value="ap-northeast-2">Asia Pacific (Seoul)</option>
                                <option value="ap-east-1">Asia Pacific (Hong Kong)</option>
                                <option value="me-south-1">Middle East (Bahrain)</option>
                                <option value="af-south-1">Africa (Cape Town)</option>
                                <option value="us-gov-east-1">AWS GovCloud (US-East)</option>
                                <option value="us-gov-west-1">AWS GovCloud (US-West)</option>
                                <option value="cn-north-1">China (Beijing)</option>
                                <option value="cn-northwest-1">China (Ningxia)</option>
                                <option value="eu-south-1">Europe (Milan)</option>
                              </select>
                        </div>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Generate</button>
                </fieldset>
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
            </section>
            <section class="w-full md:w-2/4 flex flex-col px-4 m-b-3 md:px-6 text-xl text-white-800 leading-normal">
                <h4 class="my-4 mb-6 mt-0 text-sm text-center font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700 @if(empty($randomStrings)) hidden @endif">Buckets</h4>
                <textarea id="result" name="result" rows="12" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-center @if(empty($randomStrings)) hidden @endif" placeholder="" style="white-space: white-space: pre-wrap;">
                        @foreach ($randomStrings as $key => $value){{ $value }}
@endforeach
                    </textarea>
                <button type="button" class="btn mt-6 flex items-center justify-center rounded text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue600 dark:focus:ring-blue-800 @if(empty($randomStrings)) hidden @endif" data-tooltip-target="tooltip-dark" data-clipboard-target="#result">Copy</button>
                <h4 class="my-4 mb-3 mt-3 text-sm text-center font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700 @if(empty($randomStrings)) hidden @endif">Commands</h4>
                                <textarea id="resultcmd" name="resultcmd" rows="12" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-center @if(empty($randomStrings)) hidden @endif" placeholder="" style="white-space: white-space: pre-wrap;">
                        @foreach ($randomStrings as $key => $value)aws s3 mb s3://{{ $value }} --region {{ $region}}
@endforeach
                    </textarea>
                <button type="button" class="btn mt-6 flex items-center justify-center rounded text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue600 dark:focus:ring-blue-800 @if(empty($randomStrings)) hidden @endif" data-tooltip-target="tooltip-dark" data-clipboard-target="#resultcmd">Copy</button>
            </section>
            <div id="tooltip-dark" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Copy to clipboard
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </form>
        <div class="flex justify-items-center px-6 m-b-3 mt-12">
            <a href="{{ route('mailerpack') }}" class="text-green-700 mt-4 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                <ion-icon name="chevron-back-outline"></ion-icon> Back to MailerPack
            </a>
        </div>
    </div>
    @include('/blog/layouts.footer')
    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
    <script type="text/javascript">
    var Clipboard = new ClipboardJS('.btn');

    function setTooltip() {
        const div = document.getElementById('tooltip-dark');
        div.textContent = 'Copied';
    }

    function hideTooltip() {
        setTimeout(function() {
            const div = document.getElementById('tooltip-dark');
            div.textContent = 'Copy to clipboard';
        }, 1000);
    }
    Clipboard.on('success', function(e) {
        setTooltip();
        hideTooltip();
    });

    </script>
    <script>
    function getCarouselData() {
        return {
            currentIndex: 0,
            images: [
                'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                'https://source.unsplash.com/collection/1346951/800x800?sig=9',
            ],
            increment() {
                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
            },
            decrement() {
                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
            },
        }
    }

    </script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }

    </script>
    <script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');


    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {


        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');


        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }


        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });

    </script>
</body>

</html>
