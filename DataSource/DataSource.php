<?php

/*
    FELIPE BARBOSA FRONTOROLI           RA: 20748825
    FELIPE NEGRI VIEIRA                 RA: 20970332
    LEONARDO SANCHES DO NASCIMENTO      RA: 20982131
    PHILIPE TIAGO CUNHA                 RA: 20931241
*/

class DataSource {
    private $connection;
    
    public function getConnection() {
        return $this->connection;
    }

    function __construct($database) {
        $server = "localhost";
        $user = "root";
        $password = "";
        
        $this->connection = mysqli_connect($server, $user, $password, "gameland");
        
        if (!$this->connection) {
            die("<h3>Falha na Conexão com o Banco de Dados</h3>");
        }
    }
    
    function __destruct() {
        mysqli_close($this->connection);
    }
}

