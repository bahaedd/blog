<template>
<div class='grid grid-cols-12'>
        <div class="col-span-4 text-gray-300 font-sans bg-gray-900 min-h-screen pl-7 ">
            <div class="grid grid-rows-6 grid-flow-col min-h-screen items-center justify-items-start ">
                <div class="row-span-4 row-start-1 text-4xl">
                     <h4 class="text-green-500 text-center">WeatherApp</h4>                   
                    <div class="pt-12 pl-10 pr-10">
                        <input 
                            type="search" id="address" 
                            placeholder="Choose your Location" 
                            class="w-full bg-black py-3 px-12 border hover: border-gray-500 rounded shadow text-base font-sans"/>
                        <p class="text-sm">Selected: <strong id="address-value">none</strong></p>                            
                    </div>
                </div>
            </div>         
        </div>

        <div class="col-span-8 text-white font-sans font-bold bg-green-500 pt-12 pb-12 items-center justify-center">
            <div class="font-sans mx-auto w-128 max-w-lg overflow-hidden bg-gray-900 shadow-lg flex items-center justify-items-start bg-gray-900 bg-opacity-50 rounded-t">
                <div class="current-weather flex items-center justify-between px-6 pb-8 pt-8 w-full">
                    <div class="flex items-center">
                        <div>
                            <div class="text-6xl font-semibold">{{ currentTemp.actual }}°C</div>
                            <div>Feels like {{ currentTemp.feels }}°C</div>
                        </div>
                        <div class="mx-12">
                            <div class="font-semibold">{{ currentTemp.summary }}</div>
                            <div>{{ location.name}}</div>
                        </div>
                    </div>
                    <div>
                      <img :src="currentTemp.icon" width="90px" height="90px" />
                    </div>
                </div>
            </div>

        </div>    
</div>




</template>

<script>
export default {
        mounted() {
            this.fetchData();
            var placesAutocomplete = places({
        appId: 'NFX5HFT9Y6',
        apiKey: '70dbf3cf705e86df116668c74baf45c4',
        container: document.querySelector('#address')
      }).configure({
        type: 'city',
        aroundLatLngViaIP: false,
      });
    var $address = document.querySelector('#address-value')
      placesAutocomplete.on('change', (e) => {
        $address.textContent = e.suggestion.value
        this.location.name = `${e.suggestion.name}, ${e.suggestion.country}`
        this.location.lat = e.suggestion.latlng.lat
        this.location.lng = e.suggestion.latlng.lng
      });
      placesAutocomplete.on('clear', function () {
        $address.textContent = 'none';
      });
        },
        data() {
            return {
                currentTemp: {
                    actual: '',
                    feels: '',
                    summary: '',
                    icon: '',
                },
                location: {
                    name: 'Fes, Morocco',
                    lat: 34.033333,
                    lon: -5.000000,
                },
                daily: [],
                iconLink: "http://openweathermap.org/img/wn/"
            }
        },
        methods: {
            fetchData() {
                var skycons = new Skycons({'color': 'white'});

                fetch(`/api/weather?lat=${this.location.lat}&lon=${this.location.lon}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        this.currentTemp.actual = Math.round(data.main['temp']);
                        this.currentTemp.feels = Math.round(data.main['feels_like']);
                        this.currentTemp.summary = data.weather[0].main;
                        this.currentTemp.icon = this.iconLink + data.weather[0].icon + ".png";

                        
                    })
            }
        },
         watch: {
    location: {
      handler(newValue, oldValue) {
        this.fetchData()
      },
      deep: true
    }
  },
    }
</script>