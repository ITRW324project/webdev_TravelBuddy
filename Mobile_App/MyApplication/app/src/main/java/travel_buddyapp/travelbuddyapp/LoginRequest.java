package travel_buddyapp.travelbuddyapp;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

/**
 * Created by Simeon on 08/09/2017.
 */

public class LoginRequest  extends StringRequest {
    private static final String LOGIN_REQUEST_URL = "http://travelbuddy.ddns.net/login.php";
    private Map<String, String> params;

    public LoginRequest(String uName, String pWord, Response.Listener<String> listener)
    {
        super(Request.Method.POST, LOGIN_REQUEST_URL, listener, null);
        params = new HashMap<>();
        params.put("username", uName);
        params.put("password", pWord);
    }

    public Map<String, String> getParams(){
        return params;
    }
}
