package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class NewTravelbook_Activity extends AppCompatActivity {

    public Button but9;

    public void init(){
        but9= (Button)findViewById(R.id.bSave__NewTravelbook);
        but9.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy9 = new Intent(NewTravelbook_Activity.this,Travelbook_view_activity.class);
                startActivity(toy9);
            }
        });
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_new_travelbook_);
        init();
    }
}
