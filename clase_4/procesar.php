<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form procesed</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    
    echo '<pre>';
    print_r($_POST);
    echo '<pre/>';
    
    ?>
    <div id="midiv">
        <table border="1">
            <caption>Datos del muchacho</caption>
            <thead>
                <tr>
                   <th colspan="4" scope="rowgroup">Your basic info</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2">Nombre</th>
                    <td colspan="2" align=center><?php echo $_POST['nombre'];?></td>
                </tr>
                <tr>
                    <th colspan="2">Apellido</th>
                    <td colspan="2" align=center><?php echo $_POST['apellido'];?></td>


                </tr>
                <tr>
                    <th colspan="2">Nacionalidad</th>
                    <td colspan="2" align=center><?php echo $_POST['nacionalidad'];?></td>
                </tr>
                <tr>
                    <th colspan="2">Fecha nacimiento</th>
                    <td colspan="2" align=center><?php echo $_POST['fecha'];?></td>
                </tr>
                <tr>
                    <th colspan="2">Estado civil</th>
                    <td colspan="2" align=center><?php echo $_POST['estado'];?></td>
                </tr>
                <tr>
                    <th colspan="2">Email</th>
                    <td colspan="2" align=center><?php echo $_POST['email'];?></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th colspan="4" scope="rowgroup" id="asd">Your profile</th>
                </tr>
                <tr>
                    <th colspan="2">Role</th>
                    <td colspan="2" align=center><?php echo $_POST['rol'];?></td>
                </tr>
                <tr>
                    <th colspan="2">About you</th>
                    <td colspan="2" align=center><?php echo $_POST['AboutMe'];?></td>
                </tr>
                <tr>
                    <th colspan="2">Hobbies</th>
                    <td colspan="2" align=center><?php
                        if(isset($_POST['hobies']))
                        {
                             foreach($_POST['hobies'] as $valor)
                                {
                                    echo "<br>". $valor;
                                }
                        }
                       
                        ?></td>
                </tr>

            </tbody>
        </table>
    </div>
</body>
</html>
