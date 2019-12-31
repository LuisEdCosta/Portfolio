//Changes the main content of the website
function displayContent(name) {
    
    // Info to send to server
    let formData = new FormData();
    formData.append('action', 'display');
    formData.append('name', name);
    
    // Request to server
    var myRequest = new XMLHttpRequest();
    myRequest.open('POST', '../MyPHP/requests/control.php');
    myRequest.send(formData);
    
    // Update selected tab
    document.getElementById("HOME").style.backgroundColor = "#2A252C";
    document.getElementById("BRP").style.backgroundColor = "#2A252C";
    document.getElementById("WEB").style.backgroundColor = "#2A252C";
    document.getElementById("ANDROID").style.backgroundColor = "#2A252C";
    document.getElementById("RACING").style.backgroundColor = "#2A252C";
    
    document.getElementById("HOME").style.color = "white";
    document.getElementById("BRP").style.color = "white";
    document.getElementById("WEB").style.color = "white";
    document.getElementById("ANDROID").style.color = "white";
    document.getElementById("RACING").style.color = "white";
    
    document.getElementById(name).style.backgroundColor = "#f6fdff";
    document.getElementById(name).style.color = "#2c87f0";

    // Return of request
    myRequest.onload = function() {
        
        // Data coming back from server
        var myData = JSON.parse(myRequest.response);
        
        document.getElementById("box-1").innerHTML = myData['box-1'];
        document.getElementById("box-2").innerHTML = myData['box-2'];
        document.getElementById("box-3").innerHTML = myData['box-3'];
        document.getElementById("box-4").innerHTML = myData['box-4'];
    }
}