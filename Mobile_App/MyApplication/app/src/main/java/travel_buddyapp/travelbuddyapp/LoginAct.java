package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

public class LoginAct extends AppCompatActivity {

    public Button but2;

    public void init(){
        but2= (Button)findViewById(R.id.bBack_Login);
        but2.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy1 = new Intent(LoginAct.this,WelcomeActivity.class);
                startActivity(toy1);
            }
        });
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        final EditText etUserName = (EditText) findViewById(R.id.etUsername_Login);
        final EditText etPassword = (EditText) findViewById(R.id.etpassword_Login);

        final Button bLogin = (Button) findViewById(R.id.bLogin);

        bLogin.setOnClickListener(new View.OnClickListener() {
            public void onClick(View v) {

                final String uName = etUserName.getText().toString();
                final String pWord = etPassword.getText().toString();

                Response.Listener<String> responseListener = new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonResponse = new JSONObject(response);
                            boolean success = jsonResponse.getBoolean("success");
                            String result =jsonResponse.getString("result");
                            if (success) {
                                AlertDialog.Builder builder = new AlertDialog.Builder(LoginAct.this);
                                builder.setMessage(result)
                                        .create()
                                        .show();

                                Intent intent = new Intent(LoginAct.this, WelcomeActivity.class);
                                LoginAct.this.startActivity(intent);
                            } else {
                                AlertDialog.Builder builder = new AlertDialog.Builder(LoginAct.this);
                                builder.setMessage(result)
                                        .setNegativeButton("Retry", null)
                                        .create()
                                        .show();
                            }
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                };

                LoginRequest loginRequest = new LoginRequest(uName, pWord, responseListener);
                RequestQueue queue = Volley.newRequestQueue(LoginAct.this);
                queue.add(loginRequest);

            }
        });
    }
}


