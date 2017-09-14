package travel_buddyapp.travelbuddyapp;

import android.content.Intent;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

import android.view.View;
import android.widget.Button;


import java.util.List;

public class Search_Activity extends AppCompatActivity{

    public Button but1;

    public void init(){
        but1= (Button)findViewById(R.id.bBack_Search);
        but1.setOnClickListener(new View.OnClickListener(){
            @Override
                    public void onClick(View v){
                Intent toy = new Intent(Search_Activity.this,WelcomeActivity.class);
                startActivity(toy);
            }
        });
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_search_);
        init();
    }
}

