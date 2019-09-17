<?php
$name = 'juan,maria,pepe,andrea,jorgelina,cecilia';
$nombres = explode(",",$name);
sort($nombres);
var_dump($nombres);
$cant=count($nombres);
$newArray= array();
for($i=0; $i<$cant; $i++)
{
  $newArray[$i] = ucfirst($nombres[$i]);     
}
echo '<pre>';
var_dump($newArray);
echo '</pre>';

$keys = array(103,161,142,134,134,118);
$array_asosiative = array_combine($keys,$newArray);
var_dump($array_asosiative);

function existeEnArray($array,$value)
{
    $rta=0;
    if(in_array($value,$array))
    {
    $rta=1;
    }
    return $rta;
}
$flag=existeEnArray($newArray,"juan");
if($flag==1)
{
    echo "Su valor SI  existe en el array";
}
else echo "no existe papa";

function existeKey($array,$key)
{
    if(array_key_exists($key,$array))
    {
        echo "La key existe papa, su valor es: ".$array[$key];
    }
    
}
echo '<br/>';
existeKey($array_asosiative,14);
echo '<br/>';
echo '<br/>';
function arrayAsoToString($array)
{
    $keys=array_keys($array);
    $keys_str = implode(",",$keys);
    echo $keys_str;
}

arrayAsoToString($array_asosiative);
echo '<br>';


?>