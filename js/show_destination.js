function initMap() {
  var uluru = {lat: -25.363, lng: 131.044};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}

$( document ).ready(function() {
  var start = window.location.href.indexOf("location")

  var end = window.location.href.length
  var param = window.location.href.substring(start, end);
  var location = param.replace("location=", "");


  fetch("https://maps.googleapis.com/maps/api/geocode/json?address=" + location +"&key=AIzaSyAUBHxdSTihUNqqFxLVHAc0cYFKYIoR6FQ").then(function(response) {
    return response.json();
  }).then(function(data) {
    var locationData = data.results[0];
    $('.destination-name').html(data.results[0].formatted_address);
    var uluru = {lat: data.results[0].geometry.location.lat, lng: data.results[0].geometry.location.lng};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });

    console.log( data.results[0].place_id)


    var request = {
        placeId: data.results[0].place_id
      };
      // debugger
      service = new google.maps.places.PlacesService(map);
      service.getDetails(request, callback);

      function callback(place, status) {
          if (status == google.maps.places.PlacesServiceStatus.OK) {
            console.log('here', place)
            $('.destination-name').html(place.formatted_address);

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

          }
        }
  }).catch(function() {
    alert('error');
  });
});
