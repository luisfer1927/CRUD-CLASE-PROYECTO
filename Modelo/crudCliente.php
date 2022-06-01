<?php
//CRUD =C:CREAR,INSERT, R:READ:LEER:SELECT,U:UPDATE:MODIFICAR D:DELETE:ELIMINAR O BORRAR
require_once('conexion.php');//8959-15C9Incluir el archivo conexión
class crudCliente{
    public function __construct(){
    }

    //Método para consultar todos los productos
    //de la base de datos.
    public function listarCliente(){//Read del CRUD:SELECT
      //Establecer la conexión a la base datos
      $baseDatos = Conexion::conectar();
      //Definir la sentencia sql
      $sql = $baseDatos->query('SELECT * FROM cliente ORDER BY nombre ASC');
      //Ejecutar la consulta
      $sql->execute();
      //Cerrar la conexión
      Conexion::desconectar($baseDatos);
      //Retornar el resultado de la consulta a la tabla.
      return($sql->fetchAll());//Retornar el resultado de la consulta
    }

    public function registrarCliente($cliente){ //Recibe un objeto de la clase categoria
      $mensaje = ""; //Declarar una variable llamada mensaje
      //Establecer la conexión a la base datos
      $baseDatos = Conexion::conectar();  
      //Preparar la sentencia sql
      //e_ indica que es un dato de entrada
      $sql = $baseDatos->prepare('INSERT INTO 
      cliente(idCliente,
      correo,
      nombre,
      apellido,
      peso,
      fechaNacimiento,
      genero,
      estatura)
      VALUES(:e_idCliente,
      :e_correo, 
      :e_nombre,
      :e_apellido,
      :e_peso,
      :e_fechaNacimiento,
      :e_genero,
      :e_estatura
      ) ');
      //Las siguientes líneas capturan los valores de los atributos del objeto
      $sql->bindValue('e_idCliente', $cliente->getidCliente());   
      $sql->bindValue('e_correo', $cliente->getcorreo());
      $sql->bindValue('e_nombre', $cliente->getnombre());
      $sql->bindValue('e_apellido', $cliente->getapellido());
      $sql->bindValue('e_peso', $cliente->getpeso());
      $sql->bindValue('e_fechaNacimiento', $cliente->getfechaNacimiento());
      $sql->bindValue('e_genero', $cliente->getgenero());
      $sql->bindValue('e_estatura', $cliente->getestatura());

      try{ //Capturar excepciones de la base de datos
        //Ejecutar la consulta
        $sql->execute();
        $mensaje = "Registro exitoso";
      }
      catch(Exception $excepcion){ //Exception: Excepción o un error
        //echo $excepcion->getMessage();
        $mensaje = "Problemas en el registro";
      }
      //Cerrar la conexión
      Conexion::desconectar($baseDatos);
      return $mensaje;
    }

    public function buscarCliente($cliente){//Read del CRUD:SELECT
      //Establecer la conexión a la base datos
      //var_dump($categoria);
      $baseDatos = Conexion::conectar();
      //Definir la sentencia sql
      $sql = $baseDatos->query("SELECT * FROM cliente WHERE idCliente=".$cliente->getidCliente());
      //Ejecutar la consulta
      $sql->execute();
      //Cerrar la conexión
      Conexion::desconectar($baseDatos);
      //Retornar el resultado de la consulta a la tabla.
      return($sql->fetch());//Retornar el resultado de la consulta
    }

    public function actualizarCliente($cliente){ //Recibe un objeto de la clase cliente
      $mensaje = "";
      //Establecer la conexión a la base datos
      $baseDatos = Conexion::conectar();  
      //Preparar la sentencia sql
      //e_ indica que es un dato de entrada
      $sql = $baseDatos->prepare('UPDATE  
      cliente SET correo=:e_correo,
      nombre=:e_nombre, apellido=:e_apellido, fechaNacimiento=:e_fechaNacimiento, genero=:e_genero, estatura=:e_estatura, peso=:e_peso
      WHERE idCliente=:e_idCliente
      ');
      //Las siguientes líneas capturan los valores de los atributos del objeto
      $sql->bindValue('e_correo', $cliente->getcorreo());
      $sql->bindValue('e_nombre', $cliente->getnombre());
      $sql->bindValue('e_apellido', $cliente->getcliente());
      $sql->bindValue('e_peso', $cliente->getpeso());
      $sql->bindValue('e_fechaNacimiento', $cliente->getfechaNacimiento());
      $sql->bindValue('e_genero', $cliente->getgenero());
      $sql->bindValue('e_estatura', $cliente->getestatura());
      $sql->bindValue('e_idCliente', $cliente->getidCliente());
      try{ //Capturar excepciones de la base de datos
        //Ejecutar la consulta
        $sql->execute();
        $mensaje = "Actualización exitosa";
      }
      catch(Exception $excepcion){ //Exception: Excepción o un error
        echo $excepcion->getMessage();
        $mensaje = "Problemas en la actualización";
      }
      //Cerrar la conexión
      Conexion::desconectar($baseDatos);
      return $mensaje;
    }

    public function eliminarProducto($cliente){ //Recibe un objeto de la clase categoria
      //Establecer la conexión a la base datos
      $baseDatos = Conexion::conectar();  
      //Preparar la sentencia sql
      //e_ indica que es un dato de entrada
      $sql = $baseDatos->prepare('DELETE FROM  
      cliente WHERE idCliente=:e_idCliente');
      //Las siguientes líneas capturan los valores de los atributos del objeto
      $sql->bindValue('e_idCliente', $cliente->getidCliente());
      try{ //Capturar excepciones de la base de datos
        //Ejecutar la consulta
        $sql->execute();
        echo "Eliminación exitosa";
      }
      catch(Exception $excepcion){ //Exception: Excepción o un error
        //echo $excepcion->getMessage();
        echo "Problemas en la eliminación";
      }
      //Cerrar la conexión
      Conexion::desconectar($baseDatos);
    }
}



?>