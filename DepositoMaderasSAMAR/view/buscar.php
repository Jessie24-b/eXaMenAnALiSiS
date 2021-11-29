<?php 
    $mysqli = new mysqli("localhost","root","root","samar");

    $salida="";
    $query = "SELECT * FROM cliente ORDER BY name";

    if(isset($_POST['consulta'])){
        $q = $mysqli->real_escape_string($_POST['consulta']);
        $query = "SELECT name,lastname,telephone,address,email FROM cliente
        WHERE telephone LIKE '%".$q."%'";
    }

    $resultado = $mysqli->query($query);

    if($resultado->num_rows > 0){

        $salida.="<table class = 'table'>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Lastname</td>
                            <td>Telephone</td>
                            <td>Address</td>
                            <td>Email</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>";
        
        while($fila = $resultado->fetch_assoc()){

            $salida.='<tr>
                        <td>'.$fila['name'].'</td>
                        <td>'.$fila['lastname'].'</td>
                        <td>'.$fila['telephone'].'</td>
                        <td>'.$fila['address'].'</td>
                        <td>'.$fila['email'].'</td>
                        <td>
                        <div>
                            <div style="float: left;">
                                <a href="?controlador=LogIn&accion=updateClient&id='.$fila['id'].'">Update |</a>
                            </div>
                            <div style="float: left;">
                                <a href="?controlador=LogIn&accion=deleteClient&id='.$fila['id'].'">| Delete</a>
                            </div>
                        </div>
                        
                        </td>
                    </tr>';
        }  

        $salida.="</tbody></table>";
    }else{
        $salida.="No hay datos";
    }

    echo $salida;

    $mysqli->close();
?>