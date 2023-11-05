@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="col-lg-12 connectedSortable">
                <div id="map" style="width: 100%; height: 90vh;"></div>
            </div>

            <script>
                const map = L.map('map').setView([-5.400219, 105.256424], 12); // Meningkatkan nilai zoom menjadi 14

                const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19, // Anda bisa menyesuaikan maxZoom sesuai kebutuhan
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
            </script>
        </section>
    </div>
@endsection
