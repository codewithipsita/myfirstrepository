<?php 
$h2_color="green";
echo "<h1 style='color:pink'>php with html<h1>";
echo "<h3 style='color:brown'>Ipsita</h3>";
?>

<?php
$name="Ashish Pattanaik";
echo "<h1 style='color:orange' >My love $name</h1>";
?>

<h1 style="color:indigo">
  My life is  <?php echo $name; ?>
</h1>


    <h2 style="color:<?php echo $h2_color;?>"><?php echo"this is h2 tag";?></h2>
       <h2 style="color:<?php echo $h2_color;?>"> <?php echo"$name";?><h2>
           <h2 style="color:<?php echo $h2_color;?>">My love name is <?php echo"$name";?>
