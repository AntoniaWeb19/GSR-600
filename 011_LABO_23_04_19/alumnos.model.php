<?php

   class AlumnoModel extends Alumno{
       #Atributos para la conexion
       private static $db_host = 'localhost';
       private static $db_user = 'root';
       private static $db_pass = '';
       private  $db_name = 'php_pdo_abm';
       private $pdo;

       #Metodos constructor
       public function __CONSTRUCT(){
           try{
               $this->pdo = new PDO('mysql:host='.self::$db_host.';dbname='.$this->db_name,self::$db_user, self::$db_pass);
               $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           }catch(Exception $e){
               die ($e->getMessage());

                  }
           }
           #Metodo para listar alumnos
           public function Listar(){
               try{
                   $result = array();
                   $stm = $this->pdo->prepare("SELECT * FROM alumnos");
                   $stm->execute();

                   foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $row){
                       $alumno = new Alumno();
                       $alumno->__SET('Id',$row->id);
                       $alumno->__SET('Nombre',$row->nombre);
                       $alumno->__SET('Apellido',$row->apellido);
                       $alumno->__SET('Sexo',$row->sexo);
                       $alumno->__SET('FechaNacimiento',$row->fecha_nacimiento);
                       $result[] = $alumno;

                   }
                   return $result;
            }catch(Exception $e){
                die ($e->getMessage());
           }
       }
            #Metodo para Obtener Id
            public function Obtener($id){
                try{
                  
                    $stm = $this->pdo->prepare("SELECT * FROM alumnos WHERE id = ?");
                    $stm->execute(array($id));
                    $row = $stm->fetch(PDO::FETCH_OBJ);

                        $alumno = new Alumno();
                        $alumno->__SET('Id', $row->id);
                        $alumno->__SET('Nombre',$row->nombre);
                        $alumno->__SET('Apellido',$row->apellido);
                        $alumno->__SET('Sexo',$row->sexo);
                        $alumno->__SET('FechaNacimiento',$row->fecha_nacimiento);
                        
                      return $alumno;
                 }catch(Exception $e){
                 die ($e->getMessage());
            }
        }
        #Metodo para Eliminar alumno
        public function Eliminar($id){
            try{
              
                $stm = $this->pdo->prepare("DELETE FROM alumnos WHERE id = ?");
                $stm->execute(array($id));
               return $alumno;

         }catch(Exception $e){
             die ($e->getMessage());
        }
    }
    #Metodos para actualizar un alumno
    public function Actualizar(Alumno $data){
        try{
            $sql = "UPDATE alumnos SET
                                        nombre = ?,
                                        apellido = ?,
                                        sexo = ? ,
                                        fecha_nacimiento = ?,
                                        WHERE id = ?";
                                        
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->__GET('Nombre'),
                        $data->__GET('Apellido'),
                        $data->__GET('Sexo'),
                        $data->__GET('fechaNacimiento'),
                        $data->__GET('Id')
                    )
                );
     
     }catch(Exception $e){
         die ($e->getMessage());
        }

    }
    #Metodos para guardar un alumno
    public function Registrar(Alumno $data){
        try{
            $sql = "INSERT INTO alumnos (nombre, apellido, sexo, fecha_nacimiento) VALUES (?,?,?,?)"; 
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->__GET('Nombre'),
                        $data->__GET('Apellido'),
                        $data->__GET('Sexo'),
                        $data->__GET('fechaNacimiento')
                    )
                );
    
     }catch(Exception $e){
         die ($e->getMessage());
    }

    }

   }
?>