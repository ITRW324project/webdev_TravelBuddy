package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ListView;
import android.widget.SimpleAdapter;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Map;

public class TripActivity extends AppCompatActivity {

    public Button but7;

    public void init(final HashMap<String, String> destDesc, final String uname){
        but7= (Button)findViewById(R.id.bBack_Trip);

        but7.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy7 = new Intent(TripActivity.this,Travelbook_view_activity.class);
                toy7.putExtra("map", destDesc);
                toy7.putExtra("USERNAME", uname);
                startActivity(toy7);
            }
        });
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_trip);

        Intent intent = getIntent();
        final HashMap<String, String> destinationDescription = (HashMap<String, String>)intent.getSerializableExtra("map");
        final String[] locations = intent.getStringArrayExtra("loc");
        final String[] geoLocations = intent.getStringArrayExtra("geos");
        final String USERNAME = intent.getStringExtra("USERNAME");

        ListView resultsListview = (ListView) findViewById(R.id.tripresults_listview);

        HashMap<Integer, String> destinationdescription = new HashMap<>();
        for(int i = 0; i < locations.length; i++)
        {
            destinationdescription.put(i+1, "Location: " + locations[i]);
        }
        /*destinationdescription.put("London","Travel Time:  5h16m \nTravel Distance:  210 000km");
        destinationdescription.put("Paris","Travel Time:  5h16m \nTravel Distance:  210 000km");
        destinationdescription.put("Germany","Travel Time:  5h16m \nTravel Distance:  210 000km");*/

        List<HashMap<String,String>> listItems = new ArrayList<>();
        SimpleAdapter adapter = new SimpleAdapter(this,listItems, R.layout.trip_list,
                new String[]{"First Line","Second Line"},
                new int[]{R.id.destination_name, R.id.destination_description});

        Iterator it = destinationdescription.entrySet().iterator();
        while(it.hasNext())
        {
            HashMap<String,String> resultsMap = new HashMap<>();
            Map.Entry pair = (Map.Entry)it.next();
            resultsMap.put("First Line",pair.getKey().toString());
            resultsMap.put("Second Line",pair.getValue().toString());
            listItems.add(resultsMap);
        }

        resultsListview.setAdapter(adapter);
        init(destinationDescription, USERNAME);
    }
}
