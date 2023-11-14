<div>
    <h3 class="mb-24 font-mono text-4xl">Ayúdanos a aclarar <br> tu necesidad</h3>
    <p class="mb-12 font-sans text-3xl">Digita la dirección</p>
    <x-input class="mb-24 text-2xl bg-gray-700 h-28 shadow-black" type="text" wire:model="address" />

    <div id="map" class="h-48 mx-auto mb-12 rounded-lg w-96"></div>
    <div class="mx-auto mb-4 text-center">
        <x-input-error for="address" />
    </div>
    <script>
        function initMap() {
            // Coordenadas iniciales para centrar el mapa
            var myLatLng = {
                lat: 40.7128,
                lng: -74.006
            };

            // Crea un nuevo mapa
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 12
            });

            // Puedes agregar marcadores, polígonos y más aquí
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
    </script>
</div>
