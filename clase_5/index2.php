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
                <a href="index3.php">Index3</a>
            </li>
        </ul>
    </nav>
    <div>
        <p> <?php echo "Dato almacenado en _SESSION: ".$_SESSION['nombre'];?></p>
    </div>
</body>
</html>
