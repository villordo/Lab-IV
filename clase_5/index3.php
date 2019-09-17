<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Title </title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="../clase_4/index.php">Back to clase_4</a>
            </li>
        </ul>
    </nav>
     <?php
    echo "Dato almacenado en _SESSION: ".$_SESSION['nombre'];
    ?>
</body>
</html>