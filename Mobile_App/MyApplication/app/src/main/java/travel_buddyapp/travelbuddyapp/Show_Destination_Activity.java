package travel_buddyapp.travelbuddyapp;

import android.graphics.Bitmap;
import android.graphics.drawable.BitmapDrawable;
import android.graphics.drawable.Drawable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.net.Uri;
import android.content.Intent;
import android.widget.ImageButton;

public class Show_Destination_Activity extends AppCompatActivity {
    public ImageButton accomodation;
    public ImageButton attractions;
    public ImageButton restuarants;
    public Button but10;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_show__destination_);

        final Button gallery = (Button)findViewById(R.id.gallery);
        gallery.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                
            }
        });

        accoInit();
        attrInit();
        restInit();
        init();
    }

    public void init(){
        but10= (Button)findViewById(R.id.gallery);
        but10.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy10 = new Intent(Show_Destination_Activity.this,Gallery_Activity.class);
                startActivity(toy10);
            }
        });
    }

    public void accoInit()
    {
        accomodation = (ImageButton)findViewById(R.id.accomodation);
        accomodation.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Uri gmmIntentUri = Uri.parse("geo:48.864716,2.349014?q=accommodation");
                Intent mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);
                mapIntent.setPackage("com.google.android.apps.maps");
                startActivity(mapIntent);
            }
        });
    }

    public void attrInit()
    {
        attractions = (ImageButton)findViewById(R.id.attractions);
        attractions.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Uri gmmIntentUri = Uri.parse("geo:48.864716,2.349014?q=attractions");
                Intent mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);
                mapIntent.setPackage("com.google.android.apps.maps");
                startActivity(mapIntent);
            }
        });
    }

    public void restInit()
    {
        restuarants = (ImageButton)findViewById(R.id.restaurants);
        restuarants.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Uri gmmIntentUri = Uri.parse("geo:48.864716,2.349014?q=restaurants");
                Intent mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);
                mapIntent.setPackage("com.google.android.apps.maps");
                startActivity(mapIntent);
            }
        });
    }
}
