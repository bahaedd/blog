<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('/blog/layouts.head')

<body class="border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
    
    @include('/blog/layouts.navbar')
    
    <div class="px-3 mx-3 py-3 md:py-20 mb-3">
        <h2 class="my-4 mb-3 text-4xl text-center font-semibold text-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-green-700">MultiNotes</h2>
    </div>
    @livewire('note-list')
    
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    @include('/blog/layouts.footer')
    <livewire:scripts />
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
     
    <script>
      const labels = ["January", "February", "March", "April", "May", "June"];
      const data = {
        labels: labels,
        datasets: [
          {
            label : "Streak Progress",
            backgroundColor: "hsl(250, 100%, 50%)",
            borderColor: "hsl(250, 100%, 50%)",
            data: [0, 10, 5, 2, 20, 30, 45],
          },
        ],
      };

      const configLineChart = {
        type: "line",
        data,
        options: {},
      };
      for (let i = 0; i < 100; i++) {
          var chartLine = new Chart(
        document.getElementById("chartLine"+i),
        configLineChart
      );
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
