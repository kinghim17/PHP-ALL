<?php
   // key value pair more like maps in cpp
   $capitals = array("India"=>"Delhi", "US"=>"Washington DC", "UK"=>"London");
   echo $capitals["India"];  
   echo "<br>";
   $capitals["USA"] = "New York";// acccess and change it 
   $capitals["China"] = "Beijing";// add
   array_pop($capitals);// remove
   //similarly shift as array, reverse and stuff
   $values = array_values($capitals);
   foreach($values as $value){
       echo $value;
   }
   // similarly keys can be accessed too
   foreach($capitals as $key => $value){
       echo "The capital of {$key} is {$value} <br>";
   }
?>