package travel_buddyapp.travelbuddyapp;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

/**
 * Created by Stephan on 9/13/2017.
 */

public class LocationsRequest extends StringRequest
{
    private static final String LOC_REQUEST_URL = "http://simeon.ddns.net:8080/getLocations.php";
    private Map<String, String> params;

    public LocationsRequest(String uName, Response.Listener<String> listener)
    {
        super(Request.Method.POST, LOC_REQUEST_URL, listener, null);
        params = new HashMap<>();
        params.put("username", uName);
    }

    public Map<String, String> getParams(){
        return params;
    }
}
