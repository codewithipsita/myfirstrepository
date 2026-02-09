<?php
function sum($a,$b){
    echo $a + $b;
    echo "<br>";
}

sum(20,30);
sum(50,40);
sum(100,90);

//dynamic function

function userdata($name,$color){
    echo"<h1 style= 'color:$color'>$name<h1/>";
}
userdata("Namrata","purple");
userdata("Ipsita","blue");
userdata("Partha","green");


?>