<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title> Title </title>
</head>

<body>
<div>
    <form action="classController/controllerMovimientos">
            <div class="form-group">
                <label for="">Action</label>
                <select name="boton" id="">
                    <option value="" disabled selected>
                    Seleccionar un boton
                    </option>
                    <option value="a">
                        A
                    </option>
                    <option value="b">
                        B
                    </option>
                    <option value="c">
                        C
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Parametros: <br />
                    <input type="checkbox" name="params[]" value="r1"> R1
                </label>
                <label>
                    <input type="checkbox" name="params[]" value="r2"> R2
                </label>
                <label for="">
                    <input type="checkbox" name="params[]" value="l1"> L1
                </label>
                <label>
                    <input type="checkbox" name="params[]" value="l2"> L2
                </label>
                <button type="submit" class="btn btn-primary">Enviar</button>
                
            </div>
        </form>

</div>
</body>
</html>
