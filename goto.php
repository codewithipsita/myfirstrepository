<?php
/*$x=20;

echo"before condition <br/>";

if($x==20){
    goto jump;
}


$name="ashita<br/>";//if condituion is not match then all code line will be prient .if condition is matched then print before condition
//statment is jumped on line nu.14
echo $name;


jump:
echo "statment is jumped on line nu.14";*/

//using goto on loop
for($i=1;$i<10;$i++){

echo "$i <br/>";
if ($i==6){

goto outsideloop;

}

}


outsideloop:
echo "loop is break";
?>