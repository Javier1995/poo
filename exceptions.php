<?php


/* try{
  
  //throw new Exception("No hay excepciones");

}catch(Exception $e)
{
  echo 'Hubo un error: '. $e->getMessage();

}finally
{
  echo "<br />Cerrando BD";
} */
  
class DBException extends Exception{}

class Main 
{
  public function __construct()
  {
    try
    {
      throw new DBException(" No hay conexion ");
      //throw new Exception(" No hay conexion ");

    }catch(DBException $e)
    {
      echo 'Error especifico: '. $e->getMessage()."<br />";
    }catch(Exception $e)
    {
      echo 'Error generico: '. $e->getMessage()."<br />";
    }
  }
}
$main = new Main();