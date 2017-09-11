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

public class Travelbook_view_activity extends AppCompatActivity {

    public Button but8;

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

        ListView resultsListview = (ListView) findViewById(R.id.travelbookresults_listview);

        HashMap<String,String> destinationdescription = new HashMap<>();
        destinationdescription.put("European Tour","3 Destinations");
        destinationdescription.put("South Africa Trip","5 Destinations");

        List<HashMap<String,String>> listItems = new ArrayList<>();
        SimpleAdapter adapter = new SimpleAdapter(this,listItems, R.layout.travelbook_list,
                new String[]{"First Line","Second Line"},
                new int[]{R.id.travelbook_name, R.id.travelbook_description});

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
        init();
    }
}
