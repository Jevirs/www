<?php
$name=$_GET["q"];
$con=mysql_connect("localhost","root","root");
if(!$con) {
    die("error:" .mysql_error());
}
else {
    $db = mysql_select_db("test", $con);
    if (!$db) {
        die("error:" . mysql_error());
    } else {
        $result = mysql_query("SELECT * FROM user WHERE name = '$name'");
        $row = mysql_fetch_assoc($result);
        if($row){
            echo 'Used!';
        }else{
            echo 'OK!';
        }
    }
}
mysql_close($con);
?>