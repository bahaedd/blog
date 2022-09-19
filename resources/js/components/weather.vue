<template>
<div class='grid grid-cols-12'>
        <div class="col-span-4 text-gray-300 font-sans bg-gray-900 min-h-screen pl-7 ">
            <div class="grid grid-rows-6 grid-flow-col min-h-screen items-center justify-items-start ">
                <div class="row-span-4 row-start-1 text-4xl">
                     <h4 class="text-green-500 text-center">WeatherApp</h4>                   
                    <div class="pt-12 pl-10 pr-10">
                        <input 
                            type="text" 
                            name="username" 
                            placeholder="Choose your Location" 
                            class="w-full bg-black py-3 px-12 border hover: border-gray-500 rounded shadow text-base font-sans"/>                            
                    </div>
                </div>
            </div>         
        </div>

        <div class="col-span-8 text-white font-sans font-bold bg-green-500 pt-12 pb-12">
            <div class="font-sans mx-auto w-128 max-w-lg overflow-hidden bg-gray-900 shadow-lg flex items-center justify-items-start bg-gray-900 bg-opacity-50 rounded-t">
                <div class="current-weather flex items-center justify-between px-6 pb-8 pt-8 w-full">
                    <div class="flex items-center">
                        <div>
                            <div class="text-6xl font-semibold">8°C</div>
                            <div>Feels like 2°C</div>
                        </div>
                        <div class="mx-12">
                            <div class="font-semibold">Cloudy</div>
                            <div>Fes, Morocco</div>
                        </div>
                    </div>
                    <div class="mx-12">Icon</div>
                </div>
            </div>

            <div class="font-sans mx-auto pt-3 w-128 max-w-lg overflow-hidden bg-gray-900 shadow-lg flex items-center justify-items-start bg-gray-800 bg-opacity-50">
                <div class="future-weather text-sm flex items-center justify-between px-6 pb-8 pt-8 w-full">
                    <div class="flex items-center">
                        <div class="w-1/6 text-lg text-gray-200">MON</div>
                        <div class="w-4/6 px-4 flex items-center">
                            <div>icon</div>
                            <div class="ml-3 mr-6">Cloudy with a chance of showers</div>
                        </div>
                        <div class="w-1/6 text-right">
                            <div>5°C</div>
                            <div>-3°C</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="font-sans mx-auto w-128 max-w-lg overflow-hidden bg-gray-900 shadow-lg flex items-center justify-items-start bg-gray-800 bg-opacity-50">
                <div class="future-weather text-sm flex items-center justify-between px-6 pb-8 pt-8 w-full">
                    <div class="flex items-center">
                        <div class="w-1/6 text-lg text-gray-200">MON</div>
                        <div class="w-4/6 px-4 flex items-center">
                            <div>icon</div>
                            <div class="ml-3 mr-6">Cloudy with a chance of showers</div>
                        </div>
                        <div class="w-1/6 text-right">
                            <div>5°C</div>
                            <div>-3°C</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>    
</div>




</template>

<script>
export default {
        mounted() {
            this.fetchData()
        },
        data() {
            return {
                location: {
                    name: 'Fes, Morocco',
                    lat: 34.033333,
                    lon: -5.000000,
                }
            }
        },
        methods: {
            fetchData() {
                fetch(`/api/weather?lat=${this.location.lat}&lon=${this.location.lon}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data)
                    })
            }
        }
    }
</script>