<?php
$student=array("nume"=>"Popescu",
               "universitatea"=>"Al.I.Cuza",
               "facultatea"=>"Matematica",
               "anul"=>2);
foreach ( $student as $key=>$val)
{
    print "(".$key." -- ".$val.")<br>";
} // punct . este operatorul de concatenare

?>
