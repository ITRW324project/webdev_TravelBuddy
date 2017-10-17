package travel_buddyapp.travelbuddyapp;

import android.content.Intent;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.app.Activity;
import android.widget.Toast;
import android.view.Menu;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

public class SignUpActivity extends AppCompatActivity {
    Button btnReg;
    EditText etFirstName,etLastName, etUserName, etPassword, etPassword2, edtEmail;

    public Button but3;

    public void init(){
        but3= (Button)findViewById(R.id.bBack_Signup);
        but3.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent toy2 = new Intent(SignUpActivity.this,MainActivity.class);
                startActivity(toy2);
            }
        });
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_up);

        final EditText etFirstName = (EditText) findViewById(R.id.etFirstName_Signup);
        final EditText etLastName = (EditText) findViewById(R.id.etLastName_Signup);
        final EditText etUserName = (EditText) findViewById(R.id.etUsername_Signup);
        final EditText etEmail = (EditText) findViewById(R.id.etEmail_Signup);
        final EditText etNumber = (EditText) findViewById(R.id.etNumber_Signup);
        final EditText etPassword = (EditText) findViewById(R.id.etpassword_Signup);
        final EditText etPassword2 = (EditText) findViewById(R.id.etpassword2__Signup);
        final EditText etTown = (EditText) findViewById(R.id.etTown_Signup);

        final Button bSignUp = (Button) findViewById(R.id.bSignUp);

        bSignUp.setOnClickListener(new View.OnClickListener(){
          public void onClick(View v) {
              final String fName = etFirstName.getText().toString();
              final String lName = etLastName.getText().toString();
              final String email = etEmail.getText().toString();
              final int number = Integer.parseInt(etNumber.getText().toString());
              final String uName = etUserName.getText().toString();
              final String pWord = etPassword.getText().toString();
              final String town = etTown.getText().toString();


                // TODO Auto-generated method stub
                if (etFirstName.getText().toString().length() == 0) {
                    etFirstName.setError("First name not entered");
                    etFirstName.requestFocus();
                }
                if (etLastName.getText().toString().length() == 0) {
                    etLastName.setError("Last name not entered");
                    etLastName.requestFocus();
                }

                if (etUserName.getText().toString().length() == 0) {
                    etUserName.setError("Username is Required");
                    etUserName.requestFocus();
                }
                if (etPassword.getText().toString().length() == 0) {
                    etPassword.setError("Password not entered");
                    etPassword.requestFocus();
                }
                if (etPassword2.getText().toString().length() == 0) {
                    etPassword2.setError("Please confirm password");
                    etPassword2.requestFocus();
                }
                if (!etPassword2.getText().toString().equals(etPassword2.getText().toString())) {
                    etPassword2.setError("Password Not matched");
                    etPassword2.requestFocus();
                }

              Response.Listener<String> responceListener = new Response.Listener<String>() {
                  @Override
                  public void onResponse(String response) {
                      try {
                          JSONObject jsonResponce = new JSONObject(response);
                          boolean success = jsonResponce.getBoolean("success");
                          String result = jsonResponce.getString("result");
                          if (success) {
                              AlertDialog.Builder builder = new AlertDialog.Builder(SignUpActivity.this);
                              builder.setMessage(result)
                                      .setNegativeButton("Okay", null)
                                      .create()
                                      .show();

                              Intent intent = new Intent(SignUpActivity.this, LoginAct.class);
                              SignUpActivity.this.startActivity(intent);
                          } else {
                              AlertDialog.Builder builder = new AlertDialog.Builder(SignUpActivity.this);
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
              SignupRequest signupRequest = new SignupRequest(fName, lName, email, number, uName, pWord, town, responceListener);
              RequestQueue queue = Volley.newRequestQueue(SignUpActivity.this);
              queue.add(signupRequest);
          }
        });

        init();
    }
}