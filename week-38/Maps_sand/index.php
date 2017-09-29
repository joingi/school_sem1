<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-size: 18px;
    }

    input,
    button {
      border: none;
      outline: none;
      width: 100%;
      height: 50px;
      padding-left: 10px;
      font-size: 18px;
    }

    button {
      border: none;
      color: white;
      background-color: #558B2F;
    }

    frmProperty,
    input:focus {
      border: none;
      outline: none;
      border-color: red;
    }

    .marginTop10 {
      margin-top: 10px;
    }

    #map {
      width: 100%;
      height: 100vh;
    }

    #main {
      display: grid;
      grid-template-columns: 1fr 1fr;

      width: 100vw;
      height: 100vh;
    }

    #admin {
      padding: 20px;
      border-left: 1px solid rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>

  <div id="main">

    <div id="map"></div>

    <div id="admin">
      <form id="frmProperty">

        <input type="text" name="price" placeholder="price">
        <input class="marginTop10" type="text" name="address" placeholder="address">
        <button id="btnSaveProperty" class="marginTop10" type="button">SAVE PROPERTY</button>

      </form>
    </div>

  </div>


  <script>
    var jMarkerPos = {}; // {lng: 12.555742263793945, lat: 55.71004435807561}

    btnSaveProperty.addEventListener("click", function () {
      console.log("button clicked");
      var jFormProperty = new FormData(frmProperty);
      // Moved to Global scobe var jMarkerPos = {}; // {lng: 12.555742263793945, lat: 55.71004435807561}
      jFormProperty.append("lng", jMarkerPos.lng);
      jFormProperty.append("lat", jMarkerPos.lat);


      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
        }
      };
      xhttp.open("POST", "api-get-name.php", true);
      xhttp.send(jFormProperty);
    });


    // JSONP
    function initMap() {

      var jLygten = {
        lat: 55.703935,
        lng: 12.537669
      };
      // on click, use this variable to set the lat lng
      // var jMarkerPos = {} Moved to Global scobe
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: jLygten
      });

      var marker = new google.maps.Marker({
        map: map,


      });

      marker.setPosition({
        lat: 55.703935,
        lng: 12.537669
      })

      map.addListener('click', function (e) {
        jMarkerPos.lng = e.latLng.lng();
        jMarkerPos.lat = e.latLng.lat();
        console.log(jMarkerPos); // INCREDIBLE
        marker.setPosition(jMarkerPos);
      });
    }
  </script>



  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlAYGcLXj0Zob6yoTnU0iDcH9_mDf5CYo&callback=initMap"></script>
</body>

</html>