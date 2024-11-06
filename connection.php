<?php
$con = mysqli_connect("aquademo99-server.mysql.database.azure.com", "wjodcsldbe", "gu$BgQ77N0bAVOeM", "aquademo99-server") or die ("Cannot connect to database");
function mres ($con,$data){
    return mysqli_real_escape_string($con,rtrim(ltrim($data)));
}
?>
