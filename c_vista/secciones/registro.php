
<center>
  <h1>REGISTRO USUARIO</h1>
    <div class="registro">
      <form class=""  method="post">
          <div class="in">
            <input type="text" name="usu" value="" placeholder="usuario">
          </div>
          <div class="in">
            <input type="text" name="contra" value="" placeholder="contraseña">
          </div>
          <div class="in">
            <input type="text" name="email" value="" placeholder="email">
          </div>
          <div class="in">
            <input type="submit" value="Registrar" >
          </div>
      </form>
  </div>

  <?php
      $registro = new MvcController();
      $registro ->registroUsuarioController();
      if (isset($_GET['action'])) {
        if ($_GET['action']=="ok") {
          echo "Registro Exitoso";
        }
        if ($_GET['action']=="no") {
          echo "Registro vacio";
        }
      }
   ?>
</center>
