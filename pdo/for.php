
<?php
$array = ["t1", "t2", "t3", "t4", "t5", "t6"];
//je declare ma variable tableau
$j =0;
//je declare $j qui commence 0
for ($i =0; $i < count($array) ; $i++) { 
    //initialisation,condition le coumpteur de mon tableau,itération=incrémentation
    $j++;
    //j'incrémente moa $j au dessu de ma varible title car ma $j s'initialise à 0
   $title = "<h$j>$array[$i]</h$j>";
   //je stocke DANS UNE VARIABLE ATT A LA SYNTAXE
    echo $title;

}
?>

