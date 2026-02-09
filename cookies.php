<?php
setcookie("fruit","apple",time()+(86400));
//(name,value,expire)

if(isset($_COOKIE['fruit'])){
    echo "current cookie is ". $_COOKIE['fruit'];
//print_r($_COOKIE['fruit']);
}else{
    echo"no cookie set";
}


?>