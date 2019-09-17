<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:::Repasanding:::</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <!-- ctrl k c comentario -->
    <!-- bg primary,acces, danger, info, succes -->
    <!-- siempre darle una "class" a una etiqueta cuando le queramos dar algun diseño/apariencia-->
    <div class="container">
        <h1> Formulario</h1>
        <form  action="procesar.php" method="POST" >
            <div class="form-group ">
                <label for="ctrl-nombre"><h6>Nombre</h6></label>
                <input type="text" class="form-control" id="ctrl-nombre" name="nombre" placeholder="Ingrese su nombre">
            </div>

            <div class="form-group"> 
                <label for="ctrl-apellido"><h6>Apellido</h6></label>
                <input type="text" class="form-control" id="ctrl-apellido" name="apellido" placeholder="Ingrese su apellido"/>
            </div>
            <div class="form-group">
                <label for="email"><h6>Email: </h6> 
                    <input type="email" name="email" id="email" placeholder="ejemplo@gmail.com"/>
                </label>
            </div>
            <div class="form-group">
                <label for="ctrl-nacionalidad"><h6>Nacionalidad: </h6></label>
                <select name="nacionalidad" class="form-ctrl" id="ctrl-nacionalidad">
                    <option disabled selected>Seleccione nacionalidad</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Peru">Peru</option>
                </select>
            </div>
            <div class="form-group">
                <label>
                     <h6>Fecha de nacimiento:</h6><input type="date" name="fecha">
                </label>
            </div>
            <div>
                <label for=""><h6>Estado civil</h6></label>
                <br/>
                <label for="radio-casado">Casado
                    <input type="radio" name="estado" id="radio-casado" value="Casado"/>
                </label>
                
                <label for="radio-soltero">Soltero
                        <input type="radio" name="estado" id="radio-soltero" value="Soltero"/>
                 </label>
            </div>
            <br />
            <div>
                <label> <h6>Hobbies</h6></label>
                <br/>
                <input type="checkbox" name="hobies[]" value="Musica"/>Musica
                <input type="checkbox" name="hobies[]" value="Futbol"/>Fulbol
                <input type="checkbox" name="hobies[]" value="Arte"/>Arte
            </div>
            <br />
            <div>
                <label for="rol"><h6>Seleccione un rol:</h6></label>
                <select name="rol" id="rol">
                    <option disabled selected>Seleccione</option>
                    <option value="Frontend">Frontend</option>
                    <option value="Backend">Backend</option>
                    <option value="Tester">Tester</option>
                </select>
            </div>
            <div>
                <label for="AboutMe"><h6>Sobre ti:</h6></label>
                <br />
                <textarea name="AboutMe" id="AboutMe" cols="30" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>