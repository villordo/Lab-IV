<?php

/**
 * Check session
 */
include('autoload.php');
//session_start();
//var_dump($_SESSION);
$userRepo= new repository\UsersRepository();

if(isset($_GET['delete'])){
    $userRepo->delete($_GET['delete']);
}

if($_SESSION['loggedUser']) {
    $userList = $userRepo->getAll();


    /**
     * View
     */
    
    include('header.php');
    include('nav.php'); 
    ?>

    <main class="p-5">
        <div class="container">

            <h1 class="mb-5">Listado de usuarios</h1>


            <form class="form-inline" action="multiaction.php" method="POST">
                
                <div class="form-group mb-4">
                    <label for="">Accion múltiple</label>
                    <select name="action" class="form-control ml-3">
                        <option value="delete">Eliminar</option>
                        <option value="enable">Habilitar</option>
                        <option value="disable">Inhabilitar</option>
                    </select>
                    <button type="submit" class="btn btn-dark ml-3">Enviar</button>
                </div>
                

                <table border=1 class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th></th>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Fecha de nacimiento</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach($userList as $value){  ?>
                            <tr>
                                <td><input type="checkbox" name="userschecked[]" /></td>
                             
                                <td><?php echo $value->getName() ?></td>
                                <td><?php echo $value->getDNI() ?></td>
                                <td><?php echo $value->getBirthdate() ?></td>
                                <td><?php echo $value->getEmail()  ?></td>
                                 
                                <td>
                                    <a href="?delete=<?php echo $value->getEmail() ?>" class="btn btn-light">
                                        <object type="image/svg+xml" data="icons/trash-2.svg" width="16" height="16"></object>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
    </main>


    <?php include('footer.php'); 

}