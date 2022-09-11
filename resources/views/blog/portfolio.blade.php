@extends('/blog/main')
@section('title', 'Portfolio')
@section('content')
<div class="w-full bg-cover bg-center" style="height:40rem; background-image: url({{URL('/images/bg.jpg')}});">
    <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
        <div class="flex flex-col items-center justify-center lg:flex-row">
            <div class="rounded-full border-8 border-blue-700 shadow-xl">
                <img src="{{URL('/images/profile.jpg')}}" class="h-36 rounded-full sm:h-56" alt="" width="230" height="160">
            </div>
            <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                <h1 class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl">
                    Hi, I'm Bahaeddine
                </h1>
                <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
                    <div class="flex items-center justify-center pl-0 sm:justify-start md:pl-1">
                        <p class="font-body text-lg uppercase text-white">let's connect >> </p>
                    </div>
                    <div class="flex items-center space-x-6 justify-center pt-3 pl-2 sm:justify-start sm:pt-0">
                        <a href="https://www.instagram.com/bahaeddine_bahae/" class="text-gray-400 hover:text-white" target="_blank">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="https://mobile.twitter.com/Bahaedd97952415" class="text-gray-400 hover:text-white" target="_blank">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        </a>
                        <a href="https://github.com/bahaedd" class="text-gray-400 hover:text-white" target="_blank">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/bahaeddine-sihassi-2a7894114?originalSubdomain=ma" target="_blank" class="text-gray-400 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-grey-50">
    <div class="container mx-auto flex flex-col items-center py-16 md:py-20 lg:flex-row dark:bg-gray-800">
        <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
            <h2 class="font-header text-4xl font-semibold uppercase text-green-500 sm:text-5xl lg:text-6xl">Who am I?</h2>
            <h4 class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl dark:text-white">My name is Bahaeddine, I'm a Fullstack Web Developer</h4>
            <p class="pt-6 font-body leading-relaxed text-grey-20 dark:text-white">
                I am a web developer with a vast array of knowledge in many different front end and back end languages,
                responsive frameworks, databases, and best code practices. My objective is simply to be the best
                web developer that I can be and to contribute to the technology industry all that I know and can do.
                I am dedicated to perfecting my craft by learning from more seasoned developers, remaining humble, and continuously making strides to learn all that I can about development.
            </p>
            <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
                <div class="flex items-center justify-center pl-0 sm:justify-start md:pl-1">
                    {{-- <p class="font-body text-lg uppercase text-white">let's connect >> </p> --}}
                </div>
                <div class="flex items-center space-x-6 justify-center pt-3 pl-2 sm:justify-start sm:pt-0">
                    <a href="https://www.instagram.com/bahaeddine_bahae/" class="text-gray-400 hover:text-white" target="_blank">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="https://mobile.twitter.com/Bahaedd97952415" class="text-gray-400 hover:text-white" target="_blank">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                    </a>
                    <a href="https://github.com/bahaedd" class="text-gray-400 hover:text-white" target="_blank">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/bahaeddine-sihassi-2a7894114?originalSubdomain=ma" target="_blank" class="text-gray-400 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
            <div>
                <div class="flex items-end justify-between">
                    <h4 class="font-body font-semibold uppercase text-black dark:text-white">HTML && CSS</h4>
                    <h3 class="font-body text-3xl font-bold text-primary">85%</h3>
                </div>
                <div class="w-full mt-3 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 85%"></div>
                </div>
            </div>
            <div class="pt-6">
                <div class="flex items-end justify-between">
                    <h4 class="font-body font-semibold uppercase text-black dark:text-white">Laravel</h4>
                    <h3 class="font-body text-3xl font-bold text-primary">70%</h3>
                </div>
                <div class="w-full mt-3 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 70%"></div>
                </div>
            </div>
            <div class="pt-6">
                <div class="flex items-end justify-between">
                    <h4 class="font-body font-semibold uppercase text-black dark:text-white">TailwindCSS</h4>
                    <h3 class="font-body text-3xl font-bold text-primary">65%</h3>
                </div>
                <div class="w-full mt-3 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 65%"></div>
                </div>
            </div>
            <div class="pt-6">
                <div class="flex items-end justify-between">
                    <h4 class="font-body font-semibold uppercase text-black dark:text-white">VueJS</h4>
                    <h3 class="font-body text-3xl font-bold text-primary">60%</h3>
                </div>
                <div class="w-full mt-3 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 60%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto py-16 md:py-20 dark:bg-gray-800" id="services">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-green-500 sm:text-5xl lg:text-6xl">
    Here's what I'm good at!</h2>
    <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl dark:text-white">These are the services I offer</h3>
    <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
      <div class="group rounded px-8 py-12 shadow bg-green-300">
        <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
          <ion-icon name="code-slash-outline" size="large"></ion-icon>
        </div>
        <div class="text-center">
          <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">WEB DEVELOPMENT</h3>
          {{-- <p class="text-grey pt-4 text-sm group-hover:text-primary md:text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing
          elit.</p> --}}
        </div>
      </div>
      <div class="group rounded px-8 py-12 shadow bg-green-300">
        <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
            <ion-icon name="pencil-outline" size="large"></ion-icon>
        </div>
        <div class="text-center">
          <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">Technical Writing</h3>
          {{-- <p class="text-grey pt-4 text-sm group-hover:text-primary md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
          elit.</p> --}}
        </div>
      </div>
      <div class="group rounded px-8 py-12 shadow bg-green-300">
        <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
            <ion-icon name="brush-outline" size="large"></ion-icon>
        </div>
        <div class="text-center">
          <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">Web Design</h3>
          {{-- <p class="text-grey pt-4 text-sm group-hover:text-primary md:text-base">
          Lorem ipsum dolor sit amet, consectetur adipisicing
          elit.</p> --}}
        </div>
      </div>
    </div>
</div>
<div class="container mx-auto py-16 md:py-20 dark:bg-gray-800" id="projects">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-green-500 sm:text-5xl lg:text-6xl">
    Here's a list of my projects</h2>
   <div class="w-full mb-6">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t bg-green-700"></div>
            <div class="flex flex-wrap mt-12">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 mb-4 dark:bg-gray-800 mt-4">
                    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-3">
                        <a href="">
                            <img class="rounded-t-lg" src="{{Voyager::image( setting('site.logo'))}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="">
                                <h5 class="mb-6 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Weather App</h5>
                            </a>
                            <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center">
                               <a href="" class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Laravel</a>
                             </div> 
                             <div class="flex items-center">
                               <a href="" class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">VueJS</a>
                             </div> 
                             <div class="flex items-center">
                               <a href="" class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">TailwindCSS</a>
                             </div>   
                             </div> 
                        </div>
                    </div>
                </div>
            </div>
</div>
<div class="container mx-auto py-16 md:py-20 dark:bg-gray-800" id="contact">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-green-500 sm:text-5xl lg:text-6xl">
    Here's a contact form</h2>
    <h4 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl dark:text-white">
    Have Any Questions?</h4>
    {{-- <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
      <p class="font-body text-grey-10">Lorem ipsum dolor sit
      amet consectetur adipiscing elit hendrerit condimentum
      turpis nisl sem, viverra habitasse urna ante lobortis
      fermentum accumsan. Viverra habitasse urna ante
      lobortis fermentum accumsan.</p>
    </div> --}}
        @if(Session::has('success'))
            <div class="p-4 mb-4 mt-4 text-sm text-center text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <span class="font-medium text-center justify-center mx-auto">{{Session::get('success')}}</span>
            </div>
        @endif
    <form class="mx-auto w-full pt-10 sm:w-3/4" action="{{url('portfolio/store')}}" method="post">
        @csrf
      <div class="flex flex-col md:flex-row">
        <input class="mr-3 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body  md:w-1/2 lg:mr-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('name') ? 'error' : '' }}"
        placeholder="Name" type="text" name="name" id="name">
        <!-- Error -->
        @if ($errors->has('name'))
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Please enter your name.</p>
        @endif
        <input class="mt-6 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('email') ? 'error' : '' }}"
        placeholder="Email" type="text" name="email" id="email">
        @if ($errors->has('email'))
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Please enter your email.</p>
        @endif
      </div>
      <textarea class="mt-6 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('message') ? 'error' : '' }}"
      placeholder="Message" id="message" cols="30" rows="10" name="message"></textarea>
      @if ($errors->has('message'))
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Please enter your message.</p>
        @endif
      <input type="submit" name="send" value="Submit" class="mt-6 flex items-center justify-center rounded bg-green-700 px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20">
    </form>
</div>
@endsection
