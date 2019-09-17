<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<pre>';
print_r($_GET);
echo '</pre>';
// FUNCIONES QUE SERAN UTILIZADAS
function c($param1 = null) {
    echo 'Función c';
    if($param1) echo " con $param1";
}
function a($param1 = false, $param2 = null) {
    echo 'Función a';
    if(true) echo " con $param1";
    if($param2) echo " y $param2";
}
function b($param1 = null, $param2 = null, $param3 = null) {
    echo 'Functión b';
    if($param1) echo " con $param1";
    if($param2) echo " y $param2";
    if($param3) echo " y $param3";
}

$boton = $_GET['boton'];
if(isset($_GET['params']) && !empty($_GET['params'])) { //verifica si esta seteado y luego si esta vacio para saber si debe usar el call_user_func_array 
    $params = $_GET['params'];
    call_user_func_array($boton, $params);
} else {
    call_user_func($boton);
}