<?php 
class Operaciones{
    private $server = 'localhost';
    private $user = 'root';
    private $pass = 'root';
    private $db = 'samar';

    public function conectar(){
        $con = mysqli_connect($this->server,$this->user,$this->pass,$this->db) or die ('Error al conectar');
        return $con;
    }

    public function deleteClient($id){

        $sql = 'DELETE FROM cliente Where id='.$id;
        $con = $this->conectar();
        $res = mysqli_query($con, $sql) or die (mysqli_error($con));
    }

    public function buscarPersona($id){

        $sql = 'SELECT * FROM cliente WHERE id='.$id;
        $con = $this->conectar();
        $res = mysqli_query($con, $sql) or die (mysqli_error($con));
        return $res;
    }

    public function actualizarPersona($id,$name,$lastname,$telephone,$address,$email)
    {
        $sql = "UPDATE cliente SET name='$name', lastname='$lastname', telephone='$telephone', address='$address', email='$email' WHERE id=$id";
        $con = $this->conectar();
        mysqli_query($con, $sql) or die (mysqli_error($con));
    }
}
