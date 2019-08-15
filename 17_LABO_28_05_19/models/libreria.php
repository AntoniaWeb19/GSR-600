<?php
class Libreria
{
    private $pdo;

    public $id;
    public $nombre;
    public $direccion;
    public $nit;
    public $telefono;
    
public function __CONSTRUCT()
{
    try
    {
        $this->pdo = Database::StartUP();
    }
    catch(Exception $e)
     {
        die($e->getMessage());
    }
}

public function Listar()
{
    try
    {
        $result = array();

        $stm = $this->pdo->prepare("SELECT * FROM libreria");
        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Exception $e)
     {
        die($e->getMessage());
    }
}

public function Obtener($id)
{
    try
    {
       
        $stm = $this->pdo
              ->prepare("SELECT * FROM libreria WHERE id = ?");

        $stm->execute(array($id));
        return $stm->fetch(PDO::FETCH_OBJ);
    }catch(Exception $e) 
    {
        die($e->getMessage());
    }
}

public function Eliminar($id)
{
    try
    {
       
        $stm = $this->pdo
              ->prepare("DELETE  FROM libreria WHERE id = ?");
        $stm->execute(array($id));
        
    }catch(Exception $e)
     {
        die($e->getMessage());
    }
}
public function Actualizar($data)
{
    try
    {
        $sql = "UPDATE libreria SET
                        nombre      = ?,
                        direccion   = ?,                        
                        nit         = ?,                        
                        telefono    = ?
                WHERE id = ?";
        
         $this->pdo->prepare($sql)->execute(
            array(
                $data->nombre,               
                $data->direccion,
                $data->nit,                
                $data->telefono,                
                $data->id
                )
            );
      
    } catch (Exception $e) 
    {
        die($e->getMessage());
    }
}

public function Registrar(Libreria $data){
    try{
        $sql = "INSERT INTO libreria (nombre, direccion, nit, telefono)
                VALUES (?, ?, ?, ?)";
        
         $this->pdo->prepare($sql)->execute(
            array(
                $data->nombre,
                $data->direccion,
                $data->nit,                
                $data->telefono                
                )
            );
      
    }catch(Exception $e)
     {
        die($e->getMessage());
    }
 }
}