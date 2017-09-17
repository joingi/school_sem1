var xhr = new XMLHttpRequest();
// 0 - Conection created NOT opened
// 1 - Connections Opened
// 2 - Request sent, recived by server
// 3 - Response in progress (partial data)
// 4 - Response complete (success or failure)

// Ready state change
// onreadystatechange
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
        // Do something


    }
};
xhr.send();

// PHP check id request is ajax with php
function is_ajax_request() {

}