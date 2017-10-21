package travel_buddyapp.travelbuddyapp;

import com.android.volley.toolbox.StringRequest;
import com.android.volley.Request;
import com.android.volley.Response;

import java.util.HashMap;
import java.util.Map;

/**
 * Created by Stephan on 10/17/2017.
 */

public class All_TBs_request extends StringRequest
{
    private static final String TB_REQUEST_URL = "http://travelbuddy.ddns.net:/getTravelBooks.php";
    private Map<String, String> params;

    public All_TBs_request (Response.Listener<String> listener)
    {
        super(Request.Method.POST, TB_REQUEST_URL, listener, null);
        params = new HashMap<>();
    }

    public Map<String, String> getParams(){
        return params;
    }
}
