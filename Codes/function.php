
<?php
   function happy_birthday(){
       echo "Happy Birthday <br>";
       echo "bye bye<br>";
   }    
   function happy($name){
       echo "Happy Birthday {$name} <br>";
       echo "bye bye";
   }
   function hypotenuse($side1,$side2){
       $hypo= sqrt($side1*$side1 + $side2*$side2);
       return $hypo;
   }
 happy_birthday();//call
 happy("jimmy");
 echo "<br>";   
 echo hypotenuse(3,4);
?>
