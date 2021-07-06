<?php

$student=array(
array("nume"=>"Popescu","univ"=>"Al.I.Cuza","facultatea"=>"Matematica","an"=>2),
array("nume"=>"Ionescu","univ"=>"Bucuresti","facultatea"=>"Informatica","an"=>3),
array("nume"=>"Georgescu","univ"=>"Al.I.Cuza","facultatea"=>"Matematica","an"=>2)
);    
foreach($student as $val)
{
    foreach($val as $key=>$final_val)
    {
        print $key.": ".$final_val."<br>";
    }
    print "<br>";
}

?>
<br/><br/>
<a href="../../index.php">Back</a>