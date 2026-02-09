<!DOCTYPE html>
<html lang="en">
<head>
    <title>Call php function</title>
</head>
<body>
    <form method="post" action="">
        <button name="button" value="btn1">
            Call function
        </button>
    </form>L
</body>
</html>
<?php
if(isset($_POST['button'])){
btn_click_test();
}
function btn_click_test(){
    echo"function test click on button";
}

?>