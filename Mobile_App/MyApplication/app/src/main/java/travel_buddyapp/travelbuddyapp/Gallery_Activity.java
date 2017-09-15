package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class Gallery_Activity extends AppCompatActivity {


    public Button but11;

    public void init(){
        but11= (Button)findViewById(R.id.bBack_gallery);
        but11.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy11 = new Intent(Gallery_Activity.this,Show_Destination_Activity.class);
                startActivity(toy11);
            });
        });
    }

        @Override
        protected void onCreate (Bundle savedInstanceState){
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_gallery_);
            init();
        }
    }

