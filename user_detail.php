<?php
include ("Header.php");
if($_SESSION['class']!='user'){
    echo "<script>alert(\"You are not member or user\");window.location='home.php';</script>";
}
echo "<div align='center'>";
echo "<h2 style='color: salmon'>ข้อมูลส่วนตัว</h2>";
echo "ID : ".$_SESSION['code']."<br/>";
echo "Name : ".$_SESSION['name']."<br/>";
echo "Surname : ".$_SESSION['surname']."<br/>";
echo "Username : ".$_SESSION['username']."<br/>";
echo "</div>";
include ("Footer.php");
show_source("Header.php");
show_source("user_detail.php");
show_source("Footer.php");
?>