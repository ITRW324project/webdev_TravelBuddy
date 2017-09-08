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

import java.net.ResponseCache;

public class SignUpActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_up);

        final EditText etFirstName = (EditText) findViewById(R.id.etFirstName);
        final EditText etLastName = (EditText) findViewById(R.id.etLastName);
        final EditText etUserName = (EditText) findViewById(R.id.etUserName);
        final EditText etEmail = (EditText) findViewById(R.id.etEmail);
        final EditText etNumber = (EditText) findViewById(R.id.etNumber);
        final EditText etPassword = (EditText) findViewById(R.id.etPassword);
        final EditText etPassword2 = (EditText) findViewById(R.id.etPassword2);
        final EditText etTown = (EditText) findViewById(R.id.etTown);

        final Button bSignUp = (Button) findViewById(R.id.bSignUp);

        bSignUp.setOnClickListener(new View.OnClickListener(){
          public void onClick(View v){
              final String fName = etFirstName.getText().toString();
              final String lName = etLastName.getText().toString();
              final String email = etEmail.getText().toString();
              final int number = Integer.parseInt(etNumber.getText().toString());
              final String uName = etUserName.getText().toString();
              final String pWord = etPassword.getText().toString();
              final String town = etTown.getText().toString();

              Response.Listener<String> responceListener = new Response.Listener<String>(){
                  @Override
                  public void onResponse(String response) {
                      try {
                          JSONObject jsonResponce = new JSONObject(response);
                          boolean success = jsonResponce.getBoolean("success");
                          if(success)
                          {
                              AlertDialog.Builder builder = new AlertDialog.Builder(SignUpActivity.this);
                              builder.setMessage("result")
                                      .setNegativeButton("Retry", null)
                                      .create()
                                      .show();

                              Intent intent = new Intent(SignUpActivity.this, LoginAct.class);
                              SignUpActivity.this.startActivity(intent);
                          }else
                          {
                              AlertDialog.Builder builder = new AlertDialog.Builder(SignUpActivity.this);
                              builder.setMessage("result")
                                      .setNegativeButton("Retry", null)
                                      .create()
                                      .show();
                          }
                      } catch (JSONException e) {
                          e.printStackTrace();
                      }
                  }
              };

              SignupRequest signupRequest = new SignupRequest(fName, lName, email, number, uName, pWord, town, responceListener);
              RequestQueue queue = Volley.newRequestQueue(SignUpActivity.this);
              queue.add(signupRequest);
          }
        });
    }
}
