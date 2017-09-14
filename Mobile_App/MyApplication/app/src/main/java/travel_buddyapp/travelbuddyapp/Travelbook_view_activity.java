package travel_buddyapp.travelbuddyapp;

import android.Manifest;
import android.content.Context;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.location.Address;
import android.location.Criteria;
import android.location.Geocoder;
import android.location.Location;
import android.location.LocationManager;
import android.support.v4.app.ActivityCompat;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.ListView;
import android.widget.SimpleAdapter;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Locale;
import java.util.Map;

public class Travelbook_view_activity extends AppCompatActivity {

    public Button but8;
    Geocoder geocoder;
    List<Address> addresses;

    public void init(){
        but8= (Button)findViewById(R.id.bBack_ViewTravelbook);
        but8.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy8 = new Intent(Travelbook_view_activity.this,NewTravelbook_Activity.class);
                startActivity(toy8);
            }
        });
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_travelbook_view_activity);

        Intent intent = getIntent();
        final HashMap<String, String> destinationDescription = (HashMap<String, String>)intent.getSerializableExtra("map");
        final String USERNAME = intent.getStringExtra("USERNAME");
        final String[] books = intent.getStringArrayExtra("books");

        geocoder = new Geocoder(this, Locale.getDefault());

        final ListView resultsListView = (ListView) findViewById(R.id.travelbookresults_listview);

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

                                Intent intent = new Intent(Travelbook_view_activity.this, TripActivity.class);
                                intent.putExtra("map", destinationDescription);
                                intent.putExtra("loc", locations);
                                intent.putExtra("geos", geos);
                                intent.putExtra("USERNAME", USERNAME);
                                startActivity(intent);
                            }
                            else
                            {
                                AlertDialog.Builder builder = new AlertDialog.Builder(Travelbook_view_activity.this);
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
                RequestQueue queue = Volley.newRequestQueue(Travelbook_view_activity.this);
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
        init();
    }
}
