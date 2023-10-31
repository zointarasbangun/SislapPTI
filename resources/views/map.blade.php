@extends('layout.main')
@section('content')
    <section class="col-lg-12 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="col-lg-12 connectedSortable">
            <div id="map" style="width: 100%; height: 600px;"></div>
        </div>

        <script>
            const map = L.map('map').setView([-5.400219, 105.256424], 8);

            const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 10,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
        </script>
    </section>
@endsection
