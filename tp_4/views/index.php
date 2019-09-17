<?php include_once('header.php'); 
session_start();
// permite guardar información para ser utilizada entre múltiples páginas
$_SESSION['user'] = "Carlos";
$_SESSION['password'] = "Fort";
//$_SESSION['flag'];
?>
<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content">
          <header class="text-center">
               <h2>Practico N° 4</h2>
              <?php if(isset($_SESSION['flag'])){ ?> <h3>Usuario o contraseña incorrecto!</h3> <?php } ?>
          </header>
          <form action="../processing/login.php" method="post" class="login-form bg-dark-alpha p-5 text-white">
               <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar usuario" required>
               </div>
               <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="text" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña" required>
               </div>
               <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
          </form>
     </div>
</main>
<?php include_once('footer.php'); ?>

