<?php
require_once('../Modelo/Cliente.php');//Incluir el modelo Producto
require_once('../Modelo/crudCliente.php');//Incluir el CRUD.
class controladorCliente{
    //Crear el constructor
      
    public function __construct(){
    }

    public function listarCliente(){
       //Llamar el método listarProducto del crudProducto.
       $crudCliente = new crudCliente();//Instanciar crudProducto
       $listaCliente = $crudCliente->listarCliente();//Listado de productos
       return $listaCliente;
    }

    ////Recibe los valores del formulario, crea un objeto y envía la petición al CRUD
    public function registrarCliente($e_correo,$e_nombre,$e_apellido,$e_peso,$e_fechaNacimiento,$e_genero,$e_estatura){
      //Instanciación del objeto Producto
      $Cliente = new Cliente();//Crear un objeto del tipo Producto
      $Cliente->setidCliente('');//Asignar el valor del formulario al objeto
      $Cliente->setcorreo($e_correo);
      $Cliente->setnombre($e_nombre);//Asignar el valor del formulario
      $Cliente->setapellido($e_apellido);
      $Cliente->setpeso($e_peso);
      $Cliente->setfechaNacimiento($e_fechaNacimiento);
      $Cliente->setgenero($e_genero);
      $Cliente->setestatura($e_estatura);

      //Solicitar al crudProducto realice la inserción
      $crudCliente = new crudCliente();
      $mensaje = $crudCliente->registrarCliente($Cliente);
      //Imprimir el mensaje del resultado de la inserción con jscript
      echo "
      <script>
         alert('$mensaje');
         document.location.href = '../Vista/listarCliente.php';
      </script>
      ";
   }

   public function buscarCliente($e_idCliente){
      $Cliente = new Cliente(); //Definir un objeto de la clase Producto
      $Cliente->setidCliente($e_idCliente);//Setear valores

      $crudCliente = new crudCliente(); //Definir un objeto de la clase crudProducto
      //var_dump($Producto);
      $datosCliente = $crudCliente->buscarCliente($Cliente); //LLamar el método del crud
      //var_dump($datosProducto);
      $Cliente->setnombre($datosCliente['nombre']);
      $Cliente->setcorreo($datosCliente['correo']);
      $Cliente->setapellido($datosCliente['apellido']);
      $Cliente->setpeso($datosCliente['peso']);
      $Cliente->setfechaNacimiento($datosCliente['fechaNacimiento']);
      $Cliente->setgenero($datosCliente['genero']);
      $Cliente->setestatura($datosCliente['estatura']);
      return $Cliente;
   }

   public function actualizarCliente($e_idCliente,$e_nombre,$e_correo, $e_apellido, $e_peso, $e_fechaNacimiento, $e_genero, $e_estatura){
      //Instanciación del objeto Producto
      $Cliente = new Cliente();//Crear un objeto del tipo Producto
      $Cliente->setidCliente($e_idCliente);//Asignar el valor del formulario al objeto
      $Cliente->setnombre($e_nombre);//Asignar el valor del formulario
      $Cliente->setcorreo($e_correo);
      $Cliente->setapellido($e_apellido);
      $Cliente->setpeso($e_peso);
      $Cliente->setfechaNacimiento($e_fechaNacimiento);
      $Cliente->setgenero($e_genero);
      $Cliente->setestatura($e_estatura);
    
      //Solicitar al crudProducto realice la actualización
      $crudCliente = new crudCliente();
      $mensaje = $crudCliente->actualizarCliente($Cliente); 

      echo "
      <script>
         alert('$mensaje');
         document.location.href = '../Vista/listarCliente.php';
      </script>
      ";
   }

   public function eliminarCliente($e_idCliente){
      //Instanciación del objeto Producto
      $Cliente = new Cliente();//Crear un objeto del tipo Producto
      $Cliente->setidCliente($e_idCliente);//Asignar el valor del formulario al objeto
    
      //Solicitar al crudCliente realice la eliminación
      $crudCliente = new crudCliente();
      $mensaje = $crudCliente->eliminarCliente($Cliente); 

       echo "
      <script>
         alert('$mensaje');
         document.location.href = '../Vista/listarCliente.php';
      </script>
      ";

   }

   public function desplegarVista($pagina){
      //Redireccionar hacia la una vista
      header("Location:../Vista/".$pagina);
   }

}

//Probar el Controlador
$controladorCliente = new controladorCliente();
$listaCliente = $controladorCliente->listarCliente();//Verificar si se devuelven datos

//Verificar la acción a realizar.
if(isset($_POST['Registrar'])){//isset: Establer si una variable existe
   echo "Registrando";
   //Capturar los datos enviados desde el formulario
   $e_correo = $_POST['correo'];
   $e_nombre = $_POST['nombre']; //Captura del nombre digitado en la caja de texto
   $e_apellido = $_POST['apellido'];
   $e_peso = $_POST['peso'];
   $e_fechaNacimiento = $_POST['fechaNacimiento'];
   $e_genero = $_POST['genero'];
   $e_estatura = $_POST['estatura'];

   //Hacer la petición al controlador
   $controladorCliente->registrarCliente($e_correo,$e_nombre,$e_apellido,$e_peso,$e_fechaNacimiento,$e_genero,$e_estatura);
}
else if(isset($_POST['Editar'])){
   $e_idCliente= $_POST['idCliente']; //Recibir variable del formulario
   //echo $e_idProducto;
   $controladorCliente->desplegarVista("editarCliente.php?idCliente=$e_idCliente");
}
else if(isset($_REQUEST['Actualizar'])){
   //Capturar valores enviados desde la vista
   $e_idCliente = $_REQUEST['idCliente'];
   $e_nombre = $_REQUEST['nombre'];
   $e_correo = $_REQUEST['correo'];
   $e_apellido = $_REQUEST['apellido'];
   $e_peso = $_REQUEST['peso'];
   $e_fechaNacimiento = $_REQUEST['fechaNacimiento'];
   $e_genero = $_REQUEST['genero'];
   $e_estatura = $_REQUEST['estatura'];

   //Llamar el método actualizarProducto()
   $controladorCliente->actualizarCliente($e_idCliente,$e_nombre,$e_correo, $e_apellido, $e_peso, $e_fechaNacimiento, $e_genero, $e_estatura); 
}
else if(isset($_REQUEST['Eliminar'])){
   //Capturar valores enviados desde la vista
   $e_idCliente = $_REQUEST['idCliente'];

   //Llamar el método eliminarProducto()
   $controladorCliente->eliminarCliente($e_idCliente); 
}
else if(isset($_REQUEST['vista'])){
   $controladorCliente->desplegarVista($_REQUEST['vista']);
}
//Probar en el navegador

//Probar la creación de objetos
//crear o instanciar 1 objeto de la clase Producto.


/*
$Producto1 = new Producto();

var_dump($Producto1);
$Producto1->setidProducto($_POST['id']);
$Producto1->setnombre($_POST['nombre']);
//var_dump($Producto1);
echo "<br>";
echo "El id de la Producto es: ".$Producto1->getidProducto();
echo "<br>";
echo "El nombre de la Producto es: ".$Producto1->getnombre();

*/
?>