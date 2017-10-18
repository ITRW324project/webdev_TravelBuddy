package travel_buddyapp.travelbuddyapp;

import android.os.Bundle;
import android.support.v4.app.FragmentActivity;
import android.util.Log;
import android.support.v4.app.ActivityCompat;
import android.support.v4.content.ContextCompat;
import android.support.v7.app.AppCompatActivity;
import android.Manifest;
import android.content.pm.PackageManager;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import com.google.android.gms.common.api.GoogleApiClient;
import com.google.android.gms.common.api.Status;
import com.google.android.gms.location.places.Place;
import com.google.android.gms.common.ConnectionResult;
import com.google.android.gms.common.api.GoogleApiClient;
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


public class Search_Destination_Activity extends FragmentActivity implements OnMapReadyCallback, GoogleApiClient.OnConnectionFailedListener {
private  AppCompatActivity aC = new AppCompatActivity();

    private GoogleMap mMap;
    PlaceAutocompleteFragment placeAutoComplete;
    private GoogleApiClient mGoogleApiClient;



    private static final String LOG_TAG = "PlacesAPIActivity";
    private static final int GOOGLE_API_CLIENT_ID = 0;
    private static final int PERMISSION_REQUEST_CODE = 100;




    @Override
    protected void onCreate(Bundle savedInstanceState) {



        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_search__destination_);
        mGoogleApiClient = new GoogleApiClient.Builder(Search_Destination_Activity.this)
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

        }

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
        PendingResult<PlaceLikelihoodBuffer> result = Places.PlaceDetectionApi
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












       // super.onCreate(savedInstanceState);
       // setContentView(R.layout.activity_search__destination_);
        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        placeAutoComplete = (PlaceAutocompleteFragment) getFragmentManager().findFragmentById(R.id.place_autocomplete);
        placeAutoComplete.setOnPlaceSelectedListener(new PlaceSelectionListener() {
            @Override
            public void onPlaceSelected(Place place) {

                Log.d("Maps", "Place selected: " + place.getName());
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

    /**
     * Manipulates the map once available.
     * This callback is triggered when the map is ready to be used.
     * This is where we can add markers or lines, add listeners or move the camera. In this case,
     * we just add a marker near Sydney, Australia.
     * If Google Play services is not installed on the device, the user will be prompted to install
     * it inside the SupportMapFragment. This method will only be triggered once the user has
     * installed Google Play services and returned to the app.
     */
    @Override
    public void onMapReady(GoogleMap googleMap) {
        /*mMap = googleMap;

        // Add a marker in Sydney and move the camera
        LatLng sydney = new LatLng(-34, 151);
        mMap.addMarker(new MarkerOptions().position(sydney).title("Marker in Sydney"));
        mMap.moveCamera(CameraUpdateFactory.newLatLng(sydney));*/
    }

}
