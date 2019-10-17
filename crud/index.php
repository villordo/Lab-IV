<?php
include('db.php');
include('views/nav.php');
include('views/header.php');
?>
<div class="container p=4">

    <div class="row">
        <div class="col-m-4">
            <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php session_unset(); } ?>
                <div class="card card-body">
                    <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="direccion" placeholder= "Direccion">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="precio" placeholder="Precio de entrada">
                    </div>
                    <div class="form-group">
                        <!--<input type="text" class="form-control" name="precio" placeholder="Precio de entrada"> -->
                        <select name="ciudad" class="form-control">
                        <option selected disabled>Seleccione una ciudad</option>
                        <option value="1">Mar del Plata</option>
                        <option value="2">Miramar</option>
                        </select>
                    </div>
                   
                        
                     <input type="submit" class="btn btn-success btn-block" name="save" value="Save">   
                        

                    </form>
                </div>       
        </div>

        <div class="col-m-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Adress</th>
                            <th>Ticket price</th>
                            <th>ID City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query= "SELECT * FROM cines";
                        $result_cines = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_array($result_cines)){ ?>
                            <tr>
                                <td><?php echo $row['nombre_cine']; ?></td>
                                <td><?php echo $row['direccion']; ?></td>
                                <td><?php echo $row['valor_entrada']; ?></td>
                                <td><?php echo $row['id_ciudad1']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id_cine']; ?>" class="btn btn-secondary">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="delete.php?id=<?php echo $row['id_cine']; ?>" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                      <?php  } ?>
                    </tbody>
                </table>
        </div>
    </div>

</div>
<?php
include('views/footer.php');



