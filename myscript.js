function initMap() {

    var macc = {lat: 27.76250020887938, lng: -82.67011813113588};

    var map = new google.maps.Map(

        document.getElementById('googleMap'), {zoom: 15, center: macc});

    var marker = new google.maps.Marker({position: macc, map: map});

  }