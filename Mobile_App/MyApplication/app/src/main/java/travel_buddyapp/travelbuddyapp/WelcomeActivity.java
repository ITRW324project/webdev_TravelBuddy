package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;

public class WelcomeActivity extends AppCompatActivity {

    public Button but4;
    public Button but5;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_welcome);


        //Use username of logged-in user
        Intent intent = getIntent();
        final String USERNAME = intent.getStringExtra("USERNAME");

        init();
        init1(USERNAME);
        init2(USERNAME);
    }

    public void init(){
        but4= (Button)findViewById(R.id.bSearch_Welcome);
        but4.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy4 = new Intent(WelcomeActivity.this,Search_Destination_Activity.class);
                startActivity(toy4);
            }
        });
    }

    public void init1(final String userName){
        but5= (Button)findViewById(R.id.Travelbook_Button);
        but5.setOnClickListener(new View.OnClickListener(){

            @Override
            public void onClick(View v){

                Response.Listener<String> responseListener = new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonResponse = new JSONObject(response);
                            boolean success = jsonResponse.getBoolean("success");
                            String result =jsonResponse.getString("result");
                            String desc =jsonResponse.getString("description");
                            if (success) {

                                String[] books = result.split(",");
                                String[] description = desc.split(";");
                                HashMap<String,String> destinationDescription = new HashMap<>();

                                int i = 0;

                                for (String book : books) {
                                    destinationDescription.put(book.trim(), description[i]);
                                    i++;
                                }

                                Intent intent = new Intent(WelcomeActivity.this,Travelbook_view_activity.class);
                                intent.putExtra("map", destinationDescription);
                                intent.putExtra("USERNAME", userName);
                                intent.putExtra("Heading", "My TravelBooks");
                                intent.putExtra("books", books);
                                WelcomeActivity.this.startActivity(intent);
                            } else {
                                AlertDialog.Builder builder = new AlertDialog.Builder(WelcomeActivity.this);
                                builder.setMessage(result)
                                        .create()
                                        .show();
                            }
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                };

                Travel_Book_Request tb_Request = new Travel_Book_Request(userName, responseListener);
                RequestQueue queue = Volley.newRequestQueue(WelcomeActivity.this);
                queue.add(tb_Request);
            }
        });
    }

    public void init2(final String userName){
        but5= (Button)findViewById(R.id.bAllTravelBooks);
        but5.setOnClickListener(new View.OnClickListener(){

            @Override
            public void onClick(View v){

                Response.Listener<String> responseListener = new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonResponse = new JSONObject(response);
                            boolean success = jsonResponse.getBoolean("success");
                            String result =jsonResponse.getString("result");
                            String name =jsonResponse.getString("names");
                            if (success) {

                                String[] books = result.split(",");
                                String[] names = name.split(";");
                                HashMap<String,String> destinationDescription = new HashMap<>();

                                int i = 0;

                                for (String book : books) {
                                    destinationDescription.put(book.trim(), names[i]);
                                    i++;
                                }

                                Intent intent = new Intent(WelcomeActivity.this,Travelbook_view_activity.class);
                                intent.putExtra("map", destinationDescription);
                                intent.putExtra("USERNAME", userName);
                                intent.putExtra("Heading", "All TravelBooks");
                                intent.putExtra("books", books);
                                WelcomeActivity.this.startActivity(intent);
                            } else {
                                AlertDialog.Builder builder = new AlertDialog.Builder(WelcomeActivity.this);
                                builder.setMessage(result)
                                        .create()
                                        .show();
                            }
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                };

                All_TBs_request tb_Request = new All_TBs_request(responseListener);
                RequestQueue queue = Volley.newRequestQueue(WelcomeActivity.this);
                queue.add(tb_Request);
            }
        });
    }
}
