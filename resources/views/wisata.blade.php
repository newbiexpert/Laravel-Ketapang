@extends('template.navigation')

@section('konten')
    <!-- Detail Hero -->
    <section style="" class="hero-detail">
        <div class="container d-flex flex-column-reverse align-items-start">
            <p style="color:white" class="detail-text-hl">a</p>
            <span class="detail-title">a</span>
        </div>
        <div class="hero-bg">

        </div>
    </section>
    <!-- End of Detail Hero -->

    <!-- Detail Tabs -->
    <section class="hero-tabs">
        <div class="container">
            <ul class="nav nav-fill nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Deskripsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="detail-gallery.html">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">QnA</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End of Detail Tabs -->

    <!-- Detail Content (Deskripsi) -->
    <section class="deskripsi-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-4 detail-content-desc">
                    <h3 class="title-content">About</h3>
                    <p class="content-text">
                        a
                    </p>
                </div>
                <div class="col-md-8 detail-content-inf">
                    <h3 class="title-content">Information</h3>
                    <div class="group-content-information">
                        <h6>Nama</h6>
                        <p class="content-text">
                          a
                        </p>
                    </div>
                    <div class="group-content-information">
                        <h6>Alamat</h6>
                        <p class="content-text" id="alamatWisata">
                          a
                        </p>
                    </div>
                    <div class="group-content-information">
                        <h6>Jam Buka</h6>
                        <p class="content-text">
                          a
                        </p>
                    </div>
                    <div class="group-content-information">
                        <h6>Tanggal Didirikan</h6>
                        <p class="content-text">
                            a
                        </p>
                    </div>
                    <div class="group-content-information">
                        <h6>Telepon</h6>
                        <p class="content-text">
                            a
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-detail" id="map">
        </div>
    </section>
    <!-- Detail Content (Deskripsi)-->

    <section class="footer">
        <div class="container">
            <p class="float-right">Copyright &copy; 2019 - Ketapang - Telkom University</p>
        </div>
    </section>
    <!-- End of Footer  -->
    </body>
    <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/scripts/masonry.pkgd.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY&callback=initMap"
    async defer></script>
    <script>
    // Mansory Libarary Initialization
    $(".gallery-detail").masonry({
      itemSelector: ".grid-item",
      columnWidth: 350,
      gutter: 10
    });

    // AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY
    function initMap() {
      const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -6.903363, lng: 107.6081381 },
        zoom: 16
      });

      const geocoder = new google.maps.Geocoder();

      geoLocation(geocoder, map);
    }

    function geoLocation(geocoder, mapResults) {
      const address = $("#alamatWisata").text();
      geocoder.geocode({ address: address }, function(res, status) {
        if (status == "OK") {
          mapResults.setCenter(res[0].geometry.location);
          const marker = new google.maps.Marker({
            map: mapResults,
            position: res[0].geometry.location
          });
        } else {
          console.log(status);
        }
      });
    }
    </script>
    </html>
@endsection
<!-- Footer  -->
