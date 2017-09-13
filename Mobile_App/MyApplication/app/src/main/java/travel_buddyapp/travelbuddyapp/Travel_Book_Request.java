package travel_buddyapp.travelbuddyapp;

import com.android.volley.toolbox.StringRequest;
import com.android.volley.Request;
import com.android.volley.Response;

import java.util.HashMap;
import java.util.Map;

/**
 * Created by Stephan on 9/12/2017.
 */

public class Travel_Book_Request extends StringRequest
{
    private static final String TB_REQUEST_URL = "http://simeon.ddns.net:8080/getTravelBooks.php";
    private Map<String, String> params;

    public Travel_Book_Request(String uName, Response.Listener<String> listener)
    {
        super(Request.Method.POST, TB_REQUEST_URL, listener, null);
        params = new HashMap<>();
        params.put("username", uName);
    }

    public Map<String, String> getParams(){
        return params;
    }
}
