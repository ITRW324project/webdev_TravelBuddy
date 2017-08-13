function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -33.8688, lng: 151.2195},
    zoom: 13,
    mapTypeId: 'roadmap'
  });

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      console.log(place)

      $('.destination-name').html(place.formatted_address);
      $('.hint').html('Scroll down to see more');

      var photo = place.photos[0].getUrl({
          maxWidth: 640
      });

      $('.photos-row').empty();
      place.photos.forEach(function(pic) {
        var pic = pic.getUrl({
            maxWidth: 640
        });


        $('.photos-row').append(`<div class="col-3 col-md-6 col-lg-3">
          <div class="card card-destination-image" style="background-image: url(`+ pic +`)">
              </div>
            </div>
          </div>`);
      });

      $('.welcome-banner').css('background-image', 'url("' + photo + '")');

      $('.destination-info').show();

      // APPEND IMAGES

      //SHOW PHOTO GALLERY

      // TODO LINK TO
      //https://www.airbnb.com/s/vanderbijlpark/homes?checkin=2017-12-01&allow_override%5B%5D=&checkout=2017-12-16

      //https://www.tripadvisor.co.za/Attractions

      //https://www.zomato.com/

      // TODO ADD ABILITY TO GO TO LOCATION
      //window.location.href.indexOf("Search")
      //window.location.href.length
      //window.location.href.substring(56, 92)




      if (!place.geometry) {
        console.log("Returned place contains no geometry");
        return;
      }
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
}
