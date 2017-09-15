package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.support.v4.app.FragmentActivity;
import android.os.Bundle;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

public class ViewMap_Activity extends FragmentActivity implements OnMapReadyCallback {

    private GoogleMap mMap;

    @Override
    protected void onCreate(Bundle savedInstanceState) {


        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_view_map_);
        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);


    }

    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;
        Intent intent = getIntent();
         final String[] geolocations = intent.getStringArrayExtra("geolocation");
        final String USERNAME = intent.getStringExtra("USERNAME");

        String[][] geolocation = new String[geolocations.length][2];
        double[] lat = new double[geolocation.length];
        double[] lon = new double[geolocation.length];
        LatLng[] location = new LatLng[geolocations.length];
        for(int i = 0; i < geolocation.length; i++)
        {
            geolocation[i] = geolocations[i].split(",");
        }
        for(int i = 0; i < geolocation.length;i++) {
            for (int j = 0; j < 2; j++) {
                geolocation[i][j].trim();
                if (j == 0) {
                    lat[i] = Double.parseDouble(geolocation[i][j]);
                } else
                    lon[i] = Double.parseDouble(geolocation[i][j]);
            }

        }
        for(int i = 0; i < geolocations.length; i++ )
        {
            location[i]= new LatLng(lat[i],lon[i]);
        }

        for(int i = 0; i < location.length;i++)
        {
            if(i == 0)
            {
                mMap.addMarker(new MarkerOptions().position(location[i]).title(  "1st Destination"));
            }

            else if(i == 1)
            {
                mMap.addMarker(new MarkerOptions().position(location[i]).title("2nd Destination"));
            }
           else  if(i == 2)
            {
                mMap.addMarker(new MarkerOptions().position(location[i]).title("3rd Destination"));
            }
            else
            {
                mMap.addMarker(new MarkerOptions().position(location[i]).title(String.valueOf(i+1) + "th Destination"));
            }

        }
        LatLng pretoria = new LatLng(-26.245167, 28.015680);

        mMap.moveCamera(CameraUpdateFactory.newLatLng(pretoria));
    }
}





