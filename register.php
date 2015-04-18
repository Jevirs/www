<?php
$con = mysql_connect("localhost","root","root");
if(!$con) {
    die("error:" .mysql_error());
}
else {
    $db = mysql_select_db("test", $con);
    if (!$db) {
        die("error:" .mysql_error());
    } else {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        $sql = "select * from user where name = '$name'";
        $result = mysql_query($sql);
        if (mysql_num_rows($result)) {
            echo 'existed name!<br>';
        } else {
            $insert = "INSERT INTO user (name,password,email) VALUES('$name','$password','$email')";
            if (!mysql_query($insert)) {
                die('Error: ' . mysql_error());
            }else{
                echo "register success <br>";
                header("refresh:3;url=./index.html");
            }
        }
    }
}
mysql_close($con);
?>