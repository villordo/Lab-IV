<?php



use controllers\Personas as C_Personas;
use models\Persona as M_Persona;

include('header.php');

//new controllers\Personas();
//new models\Persona();
?>
<form action="" method="POST">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name"nombre"/>
    </div>
    <div class="form-group">
        <label for="nombre">Apellido:</label>
        <input type="text" name"apellido"/>
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>

<?php
$controllersPersonas = new C_Personas();
new M_persona();

$controllersPersonas->register();



include('footer.php');

?>