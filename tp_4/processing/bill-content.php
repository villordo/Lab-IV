<?php include('../views/header.php'); ?>
<?php include('../views/nav.php'); ?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Detalles de Factura</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Precio</th>
                         <th>Cantidad</th>
                         <th>Sub-total</th>
                    </thead>
                    <tbody>
                         <tr>
                              <td>n</td>
                              <td>d</td>
                              <td>perro</td>
                              <td>c</td>
                              <td>s</td>
                         </tr>
                         <tr>
                              <td>n</td>
                              <td>d</td>
                              <td>p</td>
                              <td>c</td>
                              <td>s</td>
                         </tr>
                         <tr>
                              <td>n</td>
                              <td>d</td>
                              <td>p</td>
                              <td>c</td>
                              <td>s</td>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="" method="" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="">TOTAL</label>
                         <input type="text" value="" class="form-control ml-3" disabled>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
               </form>
          </div>
     </section>

</main>
<?php include('../views/footer.php'); ?>
