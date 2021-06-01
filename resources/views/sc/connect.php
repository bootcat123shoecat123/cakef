<?php
   
$link = mysqli_connect("localhost","root","","cake")
        or die ("無法開啟MySQL資料庫連接!!</br>");
        
        mysqli_query($link,"SET NAMES 'UTF8'");
        /*
if (isset($_POST["name"])&& isset($_POST["number"]) && isset($_POST["phonenumber"]) && isset($_POST["takedate"]) && isset($_POST["taketime"])){
    $item="法式焦糖烤布蕾";
    $name = $_POST["name"];
    $number = $_POST["number"];
    $phonenumber = $_POST["phonenumber"];
    $takedate = $_POST ["takedate"];
    $taketime = $_POST["taketime"];
    $sql = "INSERT INTO buybuy VALUES('".$item."','".$number."','".$name."','".$phonenumber."','".$takedate."','".$taketime."')";
    mysqli_query($link,$sql);
    echo "SQL查詢字串: $sql </br>";
}*/

?>