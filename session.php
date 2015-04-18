<?php
/**
 * Created by PhpStorm.
 * User: jevirs
 * Date: 2015/4/17
 * Time: 14:14
 */
$admin = false;
session_start();

//  判断是否登陆
if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true) {
} else {
    $_SESSION["admin"] = false;
    die("please log in");
}
?>