package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.graphics.Color;
import android.graphics.drawable.ColorDrawable;
import android.net.Uri;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.v4.app.FragmentActivity;
import android.util.Log;
import android.support.v4.app.ActivityCompat;
import android.support.v4.content.ContextCompat;
import android.support.v7.app.AppCompatActivity;
import android.Manifest;
import android.content.pm.PackageManager;
import android.view.View;
import android.widget.ImageButton;
import android.widget.Toast;

import com.google.android.gms.common.api.GoogleApiClient;
import com.google.android.gms.common.api.Status;
import com.google.android.gms.location.places.AddPlaceRequest;
import com.google.android.gms.location.places.GeoDataApi;
import com.google.android.gms.location.places.Place;
import com.google.android.gms.common.ConnectionResult;
import com.google.android.gms.common.api.PendingResult;
import com.google.android.gms.common.api.ResultCallback;
import com.google.android.gms.location.places.PlaceLikelihood;
import com.google.android.gms.location.places.PlaceLikelihoodBuffer;
import com.google.android.gms.location.places.Places;
import com.google.android.gms.location.places.ui.PlaceAutocompleteFragment;
import com.google.android.gms.location.places.ui.PlaceSelectionListener;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

import java.util.Collections;


public class Search_Destination_Activity extends FragmentActivity implements OnMapReadyCallback/*, GoogleApiClient.OnConnectionFailedListener*/ {
private  AppCompatActivity aC = new AppCompatActivity();

    private GoogleMap mMap;
    MarkerOptions currentMarkerOpts = null;
    float zoomLevel = 10.0f;
    PlaceAutocompleteFragment placeAutoComplete;

    private GoogleApiClient mGoogleApiClient;
    public GeoDataApi mGeoDataClient;

    private static final String LOG_TAG = "PlacesAPIActivity";
    private static final int GOOGLE_API_CLIENT_ID = 0;
    private static final int PERMISSION_REQUEST_CODE = 100;

    String placeSearched;
    public ImageButton accomodation;
    public ImageButton attractions;
    public ImageButton restuarants;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_search__destination_);

       /* mGoogleApiClient = new GoogleApiClient.Builder(Search_Destination_Activity.this)
                .addApi(Places.PLACE_DETECTION_API)
                .enableAutoManage(this, GOOGLE_API_CLIENT_ID, this)
                .build();
        if (mGoogleApiClient.isConnected()) {
            if (ContextCompat.checkSelfPermission(Search_Destination_Activity.this,
                    Manifest.permission.ACCESS_FINE_LOCATION)
                    != PackageManager.PERMISSION_GRANTED) {
                ActivityCompat.requestPermissions(Search_Destination_Activity.this,
                        new String[]{Manifest.permission.ACCESS_FINE_LOCATION},
                        PERMISSION_REQUEST_CODE);
            } else {
                callPlaceDetectionApi();
            }

        }*/

        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        placeAutoComplete = (PlaceAutocompleteFragment) getFragmentManager().findFragmentById(R.id.place_autocomplete);
        placeAutoComplete.setOnPlaceSelectedListener(new PlaceSelectionListener() {
            @Override
            public void onPlaceSelected(Place place) {

                Log.d("Maps", "Place selected: " + place.getName() + place.getLatLng());
                mMap.clear();
                LatLng selectedPlace = place.getLatLng();
                placeSearched = remove(place.getLatLng().toString());
                Log.d("Maps", "Place selected: " + remove(place.getLatLng().toString()));

                mMap.addMarker(new MarkerOptions().position(selectedPlace).title((String) place.getName()));
                mMap.moveCamera(CameraUpdateFactory.newLatLngZoom(selectedPlace,zoomLevel));

                accoInit(remove(place.getLatLng().toString()));
                attrInit();
                //restInit();
            }

            @Override
            public void onError(Status status) {
                Log.d("Maps", "An error occurred: " + status);
            }
        });

        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);



    }

    public String remove(String place)
    {
        String getPlace = place;
        String new1 = getPlace.replaceAll("lat/lng", "");
        String new2 = new1.replaceAll("[\\\\[\\\\](){}]","");

        return new2;
    }

    public void accoInit(String place1)
    {
        final String p = place1;
        accomodation = (ImageButton)findViewById(R.id.accomodation);
        accomodation.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //String p = placeSearched;
                Log.d("Maps", "Place selected as string: " + p );
                Uri gmmIntentUri = Uri.parse("geo:" + p + "?q=accommodation");
                Intent mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);
                mapIntent.setPackage("com.google.android.apps.maps");
                startActivity(mapIntent);
            }
        });
    }

    public void attrInit()
    {
        attractions = (ImageButton)findViewById(R.id.attractions);
        attractions.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //String b = "48.864716,2.349014";
                String p = placeSearched;
                Uri gmmIntentUri = Uri.parse("geo:" + p + "?q=attractions");
                Intent mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);
                mapIntent.setPackage("com.google.android.apps.maps");
                startActivity(mapIntent);
            }
        });
    }

   /* public void restInit()
    {
        restuarants = (ImageButton)findViewById(R.id.restaurants);
        restuarants.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Uri gmmIntentUri = Uri.parse("geo:48.864716,2.349014?q=restaurants");
                Intent mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);
                mapIntent.setPackage("com.google.android.apps.maps");
                startActivity(mapIntent);
            }
        });
    }

    @Override
    public void onConnectionFailed(ConnectionResult connectionResult) {
        Log.e(LOG_TAG, "Google Places API connection failed with error code: "
                + connectionResult.getErrorCode());

        Toast.makeText(this,
                "Google Places API connection failed with error code:" +
                        connectionResult.getErrorCode(),
                Toast.LENGTH_LONG).show();
    }

    @Override
    public void onRequestPermissionsResult(int requestCode,
                                           String permissions[], int[] grantResults) {
        switch (requestCode) {
            case PERMISSION_REQUEST_CODE:
                if (grantResults.length > 0
                        && grantResults[0] == PackageManager.PERMISSION_GRANTED) {
                    callPlaceDetectionApi();
                }
                break;
        }
    }

    private void callPlaceDetectionApi() throws SecurityException {
        final PendingResult<PlaceLikelihoodBuffer> result = Places.PlaceDetectionApi
                .getCurrentPlace(mGoogleApiClient, null);
        result.setResultCallback(new ResultCallback<PlaceLikelihoodBuffer>() {
            @Override
            public void onResult(PlaceLikelihoodBuffer likelyPlaces) {
                for (PlaceLikelihood placeLikelihood : likelyPlaces) {
                    Log.i(LOG_TAG, String.format("Place '%s' with " +
                                    "likelihood: %g",
                            placeLikelihood.getPlace().getName(),
                            placeLikelihood.getLikelihood()));
                }

                likelyPlaces.release();
            }
        });
    }*/

    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;
        PlaceAutocompleteFragment autocompleteFragment = (PlaceAutocompleteFragment)
                getFragmentManager().findFragmentById(R.id.place_autocomplete);
    }

}
