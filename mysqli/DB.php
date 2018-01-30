<?php

class createCon  {
   var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db = 'demo';
    var $myconn; 

    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
            echo 'Connection established!';}
        return $this->myconn;
    }

    function insert(){
        $sql = "INSERT INTO armaric(nom_armari,nom_producte,stock_inicial,stock_actual,proveedor,referencia_proveedor,marca_equip,num_lot)
        VALUES('".$_POST["n_armari"]."','".$_POST["n_producte"]."','".$_POST["s_inicial"]."','".$_POST["s_actual"]."','".$_POST["proveedor"]."','".$_POST["ref"]."','".$_POST["m_equip"]."','".$_POST["n_lot"]."')";
        if ($this->myconn->query($sql) === TRUE) {
            echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
            } else {
            echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
            }

}

    function close() {
        mysqli_close($myconn);
        echo 'Connection closed!';
    }

}

?>