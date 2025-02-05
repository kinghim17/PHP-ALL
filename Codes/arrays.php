<?php
   $foods = array('orange','banana','apple');
   echo $foods[0];
   echo "<br>";
   for($i=0;$i<3;$i++){
       echo $foods[$i];
   }
   echo "<br>";
   array_pop($foods);
   array_push($foods,'mango');
   array_shift($foods);
   array_reverse($foods);

   foreach($foods as $food){
       echo $food;
   }
   array_pop($foods);
   array_push($foods,'mango');
?>