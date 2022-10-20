<template>
<div class='grid grid-cols-12'>
        <div class="col-span-4 text-gray-300 font-sans bg-gray-900 min-h-screen pl-7 ">
            <div class="grid grid-rows-6 grid-flow-col min-h-screen items-center justify-items-start ">
                <div class="row-span-4 row-start-1 text-4xl">
                     <h4 class="text-green-500 text-center">Domain Name</h4>                   
                    <div class="pt-12 pl-10 pr-10">
                        <input 
                            type="search" id="address"  v-model="address"
                            placeholder="Choose your Location" 
                            class="w-full bg-black py-3 px-12 border hover: border-gray-500 rounded shadow text-base font-sans"/>
                        <p class="text-sm">Selected: <strong id="address-value">{{ address }}</strong></p>                            
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
            this.fetchLocation();
            this.fetchData();
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
                    name: document.querySelector("#address-value"),
                    lat: 34.033333,
                    lon: -5.000000,
                },
                daily: [],
                iconLink: "http://openweathermap.org/img/wn/"
            }
        },
        methods: {
            fetchData() {
                
                fetch(`/api/weather?lat=${this.location.lat}&lon=${this.location.lon}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        this.currentTemp.actual = Math.round(data.main['temp']);
                        this.currentTemp.feels = Math.round(data.main['feels_like']);
                        this.currentTemp.summary = data.weather[0].main;
                        this.currentTemp.icon = this.iconLink + data.weather[0].icon + ".png";

                        
                    })
            },
            fetchLocation() {
                var $address = document.querySelector("#address-value");
                const headers = { 'X-Api-Key': 'VRxSLgGVlgB7uFosZtuUkA==VAnSBjdccOdIoF3d' };
                fetch(`https://api.api-ninjas.com/v1/dnslookup?domain=www.dailysmarty.com`, { headers })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
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