<?php

include('header.php');

use controllers\Personas as C_Personas;
use models\Persona as M_Persona;


//new controllers\Personas();
//new models\Persona();

new C_Personas();
new M_persona();

?>
<form action="controllers/login.php" method="POST">
    <div class="form-group">
        <label for="user">User:</label>
        <input type="text" name"user"/>
    </div>
    <div class="form-group">
        <label for="pass">Pass:</label>
        <input type="text" name"pass"/>
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>

<?php

include('footer.php');

?>