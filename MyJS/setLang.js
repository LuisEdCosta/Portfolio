// Changes the website language
function setLang(lang) {
    
    // Info to send to server
    let formData = new FormData();
    formData.append('action', 'setLang');
    formData.append('lang', lang);
    
    // Request to server
    var myRequest = new XMLHttpRequest();
    myRequest.open('POST', '../MyPHP/requests/control.php');
    myRequest.send(formData);
    
    // Return of request
    myRequest.onload = function() {
        location.reload(true);
    }
}