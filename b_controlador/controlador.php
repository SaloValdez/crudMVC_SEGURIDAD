<?php
  class MvcController{
    //lamando a la plantilla
    public function plantilla(){
      include "c_vista\plantilla.php";
    }

    //interaccion con el menu con las paginas
    public function enlacesPaginasController(){
      if (isset($_GET['action'])) {
        $enlacesController = $_GET['action'];
      }else {
        $enlacesController ="index";
      }

      $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
      include $respuesta;
    }

    // REGISTRO DE USUARIOS
          public function registroUsuarioController(){

            if(isset($_POST["usu"])){
                $datosController = array('usuario' => $_POST["usu"],
                                         'password' => $_POST["contra"],
                                         'email' => $_POST["email"]);
                              //enviando datos al modelo

                        if ($datosController['usuario'] =="" || $datosController['password'] =="" ) { //si los campos vacios
                          header("location:index.php?action=no");
                        }else {
                              $respuesta = Datos::registroUsuarioModel($datosController,"usuario"); //campos y el nombre de la tablas
                              if ($respuesta == "succes") {
                                 header("location:index.php?action=ok");
                              }else {
                                header("location:index.php");
                              }
                        }
            }
          }
      //INGRESO USUARIOS
       public function ingresoUsuarioController(){
           if(isset($_POST["usuIngreso"])){
              $datosController = array('usuario' => $_POST["usuIngreso"],
                                      'password' => $_POST["contraIngreso"]);
                           //enviando datos al modelo
              $respuesta = Datos::ingresoUsuarioModel($datosController,"usuario"); //campos y el nombre de la tablas

              if( $_POST["usuIngreso"]=="" || $_POST["contraIngreso"]==""){
                    header("location:index.php?action=fallo");
                  }else{
                      if($respuesta['usuario']==$_POST["usuIngreso"]&&$respuesta['password']==$_POST["contraIngreso"]){

                        session_start();
                        $_SESSION["validar"]=true;
                         header("location:index.php?action=usuario");
                      }else{
                          header("location:index.php?action=fallo");
                      }
                  }
           }

       }

       //VISTA DE USUARIOS
       public function vistaUsuarioController(){
         $respueta = Datos::vistaUsuarioModel("usuario");
        //  var_dump($respueta);

        foreach ($respueta as $row => $item) {
          echo '
                <tr>
                    <td>'.$item["usuario"].'</td>
                    <td>'.$item["password"].'</td>
                    <td>'.$item["email"].'</td>
                    <td><a href="index.php?action=editar&id='.$item["id"].'"><input type="button" name="" value="Editar"></a></td>
                    <td> <a href="index.php?action=usuario&idBorrar='.$item["id"].'"><input type="button" name="" value="Borrar"></a></td>
               </tr>
          ';

        }
       }
       //EDITAR USUARIOS
       public function  editarUsuarioController(){
         $datosController = $_GET['id'];
         $respueta  =Datos::editarUsuarioModel($datosController,"usuario");
         echo '
         <form class=""  method="post">
             <div class="in">
             <input type="hidden" name="idEditar" value="'.$respueta["id"].'" >
               <input type="text" name="usuEditar" value="'.$respueta["usuario"].'" >
             </div>
             <div class="in">
               <input type="text" name="contraEditar" value="'.$respueta["password"].'" >
             </div>
             <div class="in">
               <input type="text" name="emailEditar" value="'.$respueta["email"].'" >
             </div>
             <div class="in">
               <input type="submit" value="Actualizar" >
             </div>
         </form>

         ';

       }

       //ACTUALIZAR USUARIOS
       public function actualizarUsuarioController(){
         if(isset($_POST["usuEditar"])){
            $datosController =array("id" =>$_POST["idEditar"],
                           "usuario" =>$_POST["usuEditar"],
                           "password" =>$_POST["contraEditar"],
                           "email" =>$_POST["emailEditar"]);
       $respueta  =Datos::actualizarUsuarioModel($datosController,"usuario");
            if($respueta =="succes"){
              header("location:index.php?action=cambio");
            }else{
              echo "error";
            }

         }
       }

       //BORRAR USUARIOS
       public function borrarUsuarioController(){
             if (isset($_GET['idBorrar'])) {
                $datosController = $_GET['idBorrar'];
                $respuesta = Datos::borrarUsuarioModel($datosController,"usuario");
                if ($respuesta == "succes") {
                    header("location: index.php?action=usuario");
                }
             }
       }

  }



 ?>
