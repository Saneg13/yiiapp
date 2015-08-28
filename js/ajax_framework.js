/**
 * Created by sanek on 27.08.15.
 */
/* ---------------------------- */
/* XMLHTTPRequest Enable */
/* ---------------------------- */
function createObject() {
    var request_type;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        request_type = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        request_type = new XMLHttpRequest();
    }
    return request_type;
}
var http = createObject();

/* -------------------------- */
/* INSERT */
/* -------------------------- */
/* Required: var nocache is a random number to add to request. This value solve an Internet Explorer cache issue */
var nocache = 0;
function insert() {
    // Optional: Show a waiting message in the layer with ID login_response
    document.getElementById('insert_response').innerHTML = "Just a second..."
    // Required: verify that all fields is not empty. Use encodeURI() to solve some issues about character encoding.
    var user_name= encodeURI(document.getElementById('user_name').value);
    var user_address = encodeURI(document.getElementById('user_address').value);
    var lat = encodeURI(document.getElementById('lat').value);
    var lng = encodeURI(document.getElementById('lng').value);
    // Set te random number to add to URL request
    nocache = Math.random();
    // Pass the login variables like URL variable
    // http.open('get', 'insertInfo.php?user_name='+user_name+'&user_address=' +user_address+'&lat=' +lat+'&lng=' +lng+'&nocache = '+nocache);
    http.open('get', 'insert.php?user_name='+user_name+'&nocache = '+nocache);
    http.onreadystatechange = insertReply;
    http.send(null);
}
function insertReply() {
    if(http.readyState == 4){
        var response = http.responseText;
// else if login is ok show a message: "User added+ user name".
        document.getElementById('insert_response').innerHTML = 'User added:'+response;
    }
}