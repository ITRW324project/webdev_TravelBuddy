package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class WelcomeActivity extends AppCompatActivity {

    public Button but4;
    public Button but5;

    public void init(){
        but4= (Button)findViewById(R.id.bSearch_Welcome);
        but4.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy4 = new Intent(WelcomeActivity.this,Search_Activity.class);
                startActivity(toy4);
            }
        });
    }

    public void init1(){
        but5= (Button)findViewById(R.id.Travelbook_Button);
        but5.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy5 = new Intent(WelcomeActivity.this,Travelbook_view_activity.class);
                startActivity(toy5);
            }
        });
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_welcome);
        init();
        init1();
    }
}
