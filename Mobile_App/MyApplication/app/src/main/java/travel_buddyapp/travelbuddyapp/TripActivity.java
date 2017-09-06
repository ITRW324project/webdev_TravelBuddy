package travel_buddyapp.travelbuddyapp;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ListView;
import android.widget.SimpleAdapter;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Map;

public class TripActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_trip);

        ListView resultsListview = (ListView) findViewById(R.id.tripresults_listview);

        HashMap<String,String> destinationdescription = new HashMap<>();
        destinationdescription.put("London","5h16m 210 000km");
        destinationdescription.put("Paris","5h16m 210 000km");
        destinationdescription.put("Germany","5h16m 210 000km");

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
    }
}
