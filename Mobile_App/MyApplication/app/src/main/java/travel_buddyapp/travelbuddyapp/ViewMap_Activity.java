package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.location.Address;
import android.location.Geocoder;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.SimpleAdapter;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Locale;
import java.util.Map;

public class ViewMap_Activity extends AppCompatActivity implements OnMapReadyCallback {

    Geocoder geocoder;
    List<Address> addresses;

    ArrayList<LatLng> MarkerPoints;

    private GoogleMap mMap;
    Intent intent = getIntent();

   public  final String[] geolocations = intent.getStringArrayExtra("geolocation");

    final String USERNAME = intent.getStringExtra("USERNAME");
    @Override
    protected void onCreate(Bundle savedInstanceState) {


        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_view_map_);
        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);




        geocoder = new Geocoder(this, Locale.getDefault());

       /* final ListView resultsListView = (ListView) findViewById(R.id.travelbookresults_listview);

        resultsListView.setOnItemClickListener(new AdapterView.OnItemClickListener()
        {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int pos, long l)
            {

                String value = resultsListView.getItemAtPosition(pos).toString();
                value = value.substring(1, value.length() - 1);
                String[] val = value.split("=");
                String travelName = val[2];

                Response.Listener<String> responseListener = new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonResponse = new JSONObject(response);
                            boolean success = jsonResponse.getBoolean("success");
                            String result =jsonResponse.getString("result");
                            if (success)
                            {
                                String[] geoLocs = result.split("\\s+");
                                String[] geos = new String[geoLocs.length/2];
                                String[] locations = new String[geos.length];

                                for(int i = 0, j = 0; i < geoLocs.length/2; i++, j+=2)
                                {
                                    geos[i] = geoLocs[j] + " " + geoLocs[j+1];
                                }

                                for (int i = 0; i < locations.length; i++)
                                {
                                    String[] latLng = geos[i].split(",");
                                    Double lat = Double.parseDouble(latLng[0]);
                                    Double lng = Double.parseDouble(latLng[1]);
                                    try {
                                        addresses = geocoder.getFromLocation(lat, lng, 1);

                                        String address = addresses.get(0).getAddressLine(0);
                                        String city = addresses.get(0).getLocality();
                                        String area = addresses.get(0).getAdminArea();
                                        String country = addresses.get(0).getCountryName();

                                        locations[i] = address + ", " +city+", "+area+", "+country;

                                    } catch (IOException e) {
                                        e.printStackTrace();
                                    }
                                }

                                Intent intent = new Intent(ViewMap_Activity.this, TripActivity.class);
                                intent.putExtra("map", destinationDescription);
                                intent.putExtra("loc", locations);
                                intent.putExtra("geos", geos);
                                intent.putExtra("USERNAME", USERNAME);
                                startActivity(intent);
                            }
                            else
                            {
                                AlertDialog.Builder builder = new AlertDialog.Builder(ViewMap_Activity.this);
                                builder.setMessage(result)
                                        .create()
                                        .show();
                            }
                        }
                        catch (JSONException e)
                        {
                            e.printStackTrace();
                        }
                    }
                };

                LocationsRequest loc_Request = new LocationsRequest(travelName, responseListener);
                RequestQueue queue = Volley.newRequestQueue(ViewMap_Activity.this);
                queue.add(loc_Request);
            }
        });

        List<HashMap<String,String>> listItems = new ArrayList<>();
        SimpleAdapter adapter = new SimpleAdapter(this,listItems, R.layout.travelbook_list,
                new String[]{"First Line","Second Line"},
                new int[]{R.id.travelbook_name, R.id.travelbook_description});

        Iterator it = destinationDescription.entrySet().iterator();
        while(it.hasNext())
        {
            HashMap<String,String> resultsMap = new HashMap<>();
            Map.Entry pair = (Map.Entry)it.next();
            resultsMap.put("First Line",pair.getKey().toString());
            resultsMap.put("Second Line",pair.getValue().toString());
            listItems.add(resultsMap);
        }

        resultsListView.setAdapter(adapter);
        //init();*/
    }

    @Override
    public void onMapReady(GoogleMap googleMap) {

        mMap = googleMap;
        String[][] geolocation = new String[geolocations.length][2];
        double[] lat = new double[geolocation.length/2];
        double[] lon = new double[geolocation.length/2];
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

        for(int i = 0; i <=  geolocations.length;i++)
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

//On itemclick listner



