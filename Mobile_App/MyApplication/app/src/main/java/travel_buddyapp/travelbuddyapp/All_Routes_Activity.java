package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.location.Address;
import android.location.Geocoder;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import java.util.List;

public class All_Routes_Activity extends AppCompatActivity {

    public Button but15;
    Geocoder geocoder;
    List<Address> addresses;

    public void init(){
        but15= (Button)findViewById(R.id.bBack_AllRoutes);
        but15.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy15 = new Intent(All_Routes_Activity.this,WelcomeActivity.class);
                startActivity(toy15);
            }
        });
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity__all__routes);
    }
}
