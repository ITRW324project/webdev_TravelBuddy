package travel_buddyapp.travelbuddyapp;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

/**
 * Created by Simeon on 08/09/2017.
 */

public class SignupRequest extends StringRequest {
    private static final String SIGNUP_REQUEST_URL = "http://travelbuddy.ddns.net/signup.php";
    private Map<String, String> params;

    public SignupRequest(String fName, String lName, String email, int number, String uName, String pWord, String town, Response.Listener<String> listener)
    {
        super(Request.Method.POST, SIGNUP_REQUEST_URL, listener, null);
        params = new HashMap<>();
        params.put("fName", fName);
        params.put("lName", lName);
        params.put("email", email);
        params.put("number", number + "");
        params.put("uName", uName);
        params.put("pWord", pWord);
        params.put("town", town);
    }

    public Map<String, String> getParams(){

        return params;
    }
}
