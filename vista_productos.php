<?php 
include 'cabecera.php';
include 'config.php';
 ?>
  <!-- Estatus del carrito -->

  <div class="container">
<br>
<div class="alert alert-success">
    <?php print_r($_POST); ?>
    <a href="#" class="badge badge-success">Ver carrito</a>
</div>
  </div>

  <!-- Filtros -->

 
  <!-- vista de productos -->

  <!-- desencriptacion -->
             <!--?php foreach($lista_productos as $producto) ?>-->
             <div class="row">
                <div class="col-3">
                    <div class="card" style="left:50px ;"> 
                    <img width="300" height="400"
                    title="Titulo producto"
                    alt="Titulo"
                    class="card-img-top"
                    src="assets/img/prototipo1.jpg">
                    
                    <div class="card-body">
                <H5 class="card-title">Q75</H5>       
                <p class="card-text">Descripcion</p>
               
                <form action="" method="post">
                    <input type="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                    <input type="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['NOMBRE'],COD,KEY); ?>">
                    <input type="text" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['PRECIO'],COD,KEY); ?>">
                    <input type="text" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">
                    <button class="btn btn-primary" name="btncarrito" value="agregar" type="submit">
                        Agregar al carrito
                    </button>
                    </form> 
            </div>

            </div>

                    </div>
                </div>

            


  <?php 
include 'pie.php';
 ?>