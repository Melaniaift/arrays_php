<?php
//am copiat codul din array.php
$student=array("Popescu","Ionescu","Georgescu"); //am definit array
//print $student[1]; 
echo "numarul de elemente al array-ului student este ".count($student)."<br/><br/>";
echo $student[count($student)-1]; //count de student returneaza 3, insa indexul incepe de la 0 si de asta e -1
?>
<br/> <br/>
<a href="../../index.php">Back</a>