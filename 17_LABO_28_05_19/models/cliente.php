<?php
class Cliente
{
    private $pdo;

    public $id;
    public $nombre;
    public $ci;
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

        $stm = $this->pdo->prepare("SELECT * FROM cliente");
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
              ->prepare("SELECT * FROM cliente WHERE id = ?");

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
              ->prepare("DELETE  FROM cliente WHERE id = ?");
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
        $sql = "UPDATE cliente SET
                        nombre        = ?,
                        ci      = ?,                        
                        telefono          = ?
                WHERE id = ?";
        
         $this->pdo->prepare($sql)->execute(
            array(
                $data->nombre,               
                $data->ci,
                $data->telefono,                
                $data->id
            )
            );
      
    } catch (Exception $e) 
    {
        die($e->getMessage());
    }
}

public function Registrar(Cliente $data){
    try{
        $sql = "INSERT INTO cliente (nombre, ci, telefono)
                VALUES (?, ?, ?)";
        
         $this->pdo->prepare($sql)->execute(
            array(
                $data->nombre,
                $data->ci,
                $data->telefono                
            )
            );
      
    }catch(Exception $e)
     {
        die($e->getMessage());
    }
 }
}