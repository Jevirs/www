<?php
$con=mysql_connect("localhost","root","root");
if(!$con) {
    echo "error:" .mysql_error();
}
else {
    $db = mysql_select_db("test", $con);
    if (!$db) {
        echo "error:" . mysql_error();
    } else {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $result = mysql_query("SELECT password FROM user WHERE name = '$name'");
        $row = mysql_fetch_assoc($result);
        if(!$row){
            echo '<p>No such User</p><br>';
            echo '<p>turning to login page...</p><br>';
            header("refresh:3;url=./index.html");
        }else{
            if($row['password']==$password){
                echo 'login success<br>';
                session_start();
                $_SESSION["admin"] = true;  //  注册登陆成功的 admin 变量，并赋值 true
                header("refresh:2;url=./member.php");
            }
            else{
                echo "wrong password<br>";
                echo 'turning to login page...<br>';
                 header("refresh:3;url=./index.html");
            }
        }
    }
}
mysql_close($con);
?>