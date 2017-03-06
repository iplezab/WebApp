<!DOCTYPE html>
<?php
 session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Playground</title>
    <link href="cssNavbar.css" rel="stylesheet">
    <link href="button.css" rel="stylesheet">
    <link href="table.css" rel="stylesheet">
    <link href="input.css" rel="stylesheet">
</head>
<body bgcolor="#ffefd5">
<?php
    if (!isset($_SESSION['class']))
    {
        echo "<div>
                <ul>
                    <div>
                        <li><a href='home.php' style='color: white'>หน้าแรก</a></li>
                        <li><a href='login.php' style='color: white'>เข้าสู่ระบบ</a></li>
                    </div>
                    <div>
                        <img id='banner' src='h1.jpg'>
                    </div>
                </ul>
            </div>";
    }
    else if($_SESSION['class']=='admin')
    {
        echo "<div>
                <ul>
                    <div>
                        <li><a href='home.php' style='color: white'>หน้าแรก</a></li>
                        <li><a href='manage_user.php' style='color: white'>ระบบสมาชิก</a></li>
                        <li><a href='Logout.php' style='color: white'>ออกจากระบบ</a></li>
                    </div>
                    <div>
                        <img id='banner' src='h1.jpg'>
                    </div>
                </ul>
            </div>";
    }
    else if($_SESSION['class']=='user')
    {
        echo "<div>
                <ul>
                    <div>
                        <li><a href='home.php' style='color: white'>หน้าแรก</a></li>
                        <li><a href='user_detail.php' style='color: white'>ข้อมูลส่วนตัว</a></li>
                        <li><a href='Logout.php' style='color: white'>ออกจากระบบ</a></li>
                    </div>
                    <div>
                        <img id='banner' src='h1.jpg'>
                    </div>
                </ul>
            </div>";
    }
?>
