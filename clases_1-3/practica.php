<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>    
        <?php
            echo '<h1>';
            $edad="My title";
            echo $edad;
            echo '</h1>';
            $edad=[1,2,3,"nombre"=>"Carlos","karina",$edad => "34"];
            echo '<pre>';
            print_r($edad);
            echo '</pre>';
            echo '<pre>';
            var_dump($edad);
            echo '</pre>';

            $miNum=123;
            $miNumString="123";
           // echo $miNumString.$miNum;
                /// 3
            function multiplicar($a,$b){
                echo $a * $b;
            }
            function dividir($c,$d) 
            {
                echo $c / $d;
            }
            multiplicar(2,2);
            echo '<br/>';
            dividir(20,2);
            echo '<br/>';
            /// *5
            
            $personas = [ 
                    ['nombre' => 'Martin', 'edad' => 18, 'sexo' => 'm'], 
                    ['nombre' => 'Martina', 'edad' => 25, 'sexo' => 'f'], 
                    ['nombre' => 'Pablo', 'edad' => 27, 'sexo' => 'm'], 
                    ['nombre' => 'Paula', 'edad' => 12, 'sexo' => 'f'], 
                    ['nombre' => 'Alexis', 'edad' => 8, 'sexo' => 'm'], 
                    ['nombre' => 'Jacinta', 'edad' => 33, 'sexo' => 'f'], 
                    ['nombre' => 'Epifania', 'edad' => 45, 'sexo' => 'f'], 
            ];
            
            //echo '<pre>';
            //var_dump($personas);
            //echo '</pre>';
                
                for($fila=0; $fila < 7;$fila++)
                {
                    if($personas[$fila]["edad"] > 18)
                        {
                            echo $personas[$fila]["nombre"]." Es mayor de edad.<br>";
                        }
                    /*for($col=0;$col < 3;$col++)
                    {
                        echo "Nombre:";
                        echo $personas[$fila]["nombre"]."<br>";
                        echo "Edad:";
                        echo $personas[$fila]["edad"]."<br>";
                        echo "Sexo:";
                        echo $personas[$fila]["sexo"]."<br>";
                        
                        
                    }*/
                }
                echo "<br>";
                
                for($fila=0; $fila < 7;$fila++)
                {
                    if(($personas[$fila]["sexo"] == "f") && ($personas[$fila]["edad"] > 18))
                    {
                        echo $personas[$fila]["nombre"]." Es mayor de edad y es mujer.<br>";    
                    }
                
                }


        ?>
    </div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="3">Mayores de edad</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th> Nombre</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody>
               <?php
               $cant=0;
                for($fila=0; $fila < 7;$fila++)
                    {
                        if($personas[$fila]["edad"] > 18) 
                        {  $cant++;
                        ?>
                            <tr>
                                <td><?php echo $personas[$fila]["nombre"]  ?> </td>
                                <td><?php echo $personas[$fila]["edad"]  ?> </td>
                                <td><?php echo $personas[$fila]["sexo"]  ?> </td>
                            </tr>
                <?php }
                    } ?>  <!-- preguntar sobre esto -->
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total:</th>
                    <td><?php echo $cant ?></td>
                </tr>
            </tfoot>
        </table>
    </div> 
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="3">Mujeres mayores de edad</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th> Nombre</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody>
               <?php
               $cant=0;
                for($fila=0; $fila < 7;$fila++)
                    {
                        if(($personas[$fila]["sexo"] == "f") && ($personas[$fila]["edad"] > 18)) 
                        {  $cant++;
                        ?>
                            <tr>
                                <td><?php echo $personas[$fila]["nombre"]  ?> </td>
                                <td><?php echo $personas[$fila]["edad"]  ?> </td>
                                <td><?php echo $personas[$fila]["sexo"]  ?> </td>
                            </tr>
                <?php
                         }
                    } ?>  <!-- preguntar sobre esto -->
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total:</th>
                    <td><?php echo $cant ?></td>
                </tr>
            </tfoot>
        </table>
    </div> 
    <?php echo "El dia de la semana es ".date("l");
          e
        

     ?>
</body>
</html>