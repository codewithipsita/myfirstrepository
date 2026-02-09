<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Session</title>

</head>
<body>
    <form method="post" action=" ">
        <input type="text" name="user" placeholder="Enter user name" />
        <br/>
        <br/>
        <button name="button" value="set">Set session</button>

         <br/>
        <br/>
        <button name="button" value="get">Get session</button>

         <br/>
        <br/>
        <button name="button" value="delete">Delete session</button>
    </form>


<?php
session_start();
if(isset($_POST ['button'])){

 if($_POST['button']=="set") {
    $_SESSION['user'] = $_POST['user'];
$val=$_POST['user'];
$_SESSION['user']=$val;
 } 

       if ($_POST['button'] == "get") {
        if (isset($_SESSION['user'])) {
            echo "👤 Username: " . $_SESSION['user'];
        } else {
            echo "⚠️ No session found";
        }
    }

    if ($_POST['button'] == "delete") {
        unset($_SESSION['user']);
        session_destroy();
        echo "🗑️ Session exit";
    }



}
?>

</body>
</html>