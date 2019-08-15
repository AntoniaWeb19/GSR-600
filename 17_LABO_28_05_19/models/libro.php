<?php
class Libro
{
    private $pdo;

    public $id;
    public $nombre;
    public $autor;
    public $editorial;
    
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

        $stm = $this->pdo->prepare("SELECT * FROM libro");
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
              ->prepare("SELECT * FROM libro WHERE id = ?");

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
              ->prepare("DELETE  FROM libro WHERE id = ?");
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
        $sql = "UPDATE libro SET
                        nombre        = ?,
                        autor      = ?,                        
                        editorial          = ?
                WHERE id = ?";
        
         $this->pdo->prepare($sql)->execute(
            array(
                $data->nombre,               
                $data->autor,
                $data->editorial,                
                $data->id
            )
            );
      
    } catch (Exception $e) 
    {
        die($e->getMessage());
    }
}

public function Registrar(Libro $data){
    try{
        $sql = "INSERT INTO libro (nombre, autor, editorial)
                VALUES (?, ?, ?)";
        
         $this->pdo->prepare($sql)->execute(
            array(
                $data->nombre,
                $data->autor,
                $data->editorial                
            )
            );
      
    }catch(Exception $e)
     {
        die($e->getMessage());
    }
 }
}