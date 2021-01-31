
var a;

$.ajax({
    type: "GET",
    url: "ajax.php",
    // data: dataString,
    cache: false,
    success: successCallback//function (html) {
        // $('#test').text(html); //outputs the result from connect.php into this page
    }
);

function successCallback(data){
    a=data;
    console.log(a);
}
// console.log(a);
