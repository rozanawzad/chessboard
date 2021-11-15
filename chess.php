<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table width="500px" border="1px">
   <?php
   $letts = array("a" , "b", "c", "d", "e", "f" , "g", "h");
$arrlength = count($letts);

for($x = 0; $x < $arrlength; $x++) {
  echo $letts[$x];
}   
    echo "<tr>";
    $letter = array( "","a" , "b", "c", "d", "e", "f" , "g", "h");
       for($i=8;$i>=1;$i--){
        for ($j=1; $j <=8 ; $j++) { 
             $total= $i+$j;
             if($total%2==0){
                 echo "<td height=50px width=50px bgcolor=gray> $letter[$j].$i </td>";
                           }
             else{
                echo "<td height=50px width=50px bgcolor=white> $letter[$j].$i </td>";
                 }
                                 }
    echo "</tr>";
                            }
              
            
    $x = 1;
while($x <= 8) {
  echo  "$x <br>";
  $x++;
} 
   ?>
   </table>
</body>
</html>
