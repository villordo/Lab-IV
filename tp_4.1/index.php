<?php

include('header.php');


?>
<div>
    <form method="post" action="process/gretting.php">
        <div>
           <strong>Select lenguage</strong>
            <br />
            <label for="arg">Argentinian</label>
            <input type="radio" name="idioma" id="arg" value="arg"/>
            <label for="ing">English</label>
            <input type="radio" name="idioma" id="ing" value="ing"/>
            <label for="ita">Italian</label>
            <input type="radio" name="idioma" id="ita" value="ita"/>
        </div>
        <div>
            <strong>Select action</strong>
             <br />
            <label for="sal">Saludar</label>
            <input type="radio" name="action" id="sal" value="greet"/>
            <label for="des">Despedirse</label>
            <input type="radio" name="action" id="des" value="sayGoodbye"/>
            <label for="otr">Otro</label>
            <input type="radio" name="action" id="otr" value="other"/>
        </div>
        <div>
             <textarea name="message"  cols="30" rows="10" placeholder="Write a short message"></textarea>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>

<?php

include('footer.php');

?>


