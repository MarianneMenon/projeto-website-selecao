<?php

class Sql {
    public $conn;

    public function __construct()
    {
        return $this -> conn = mysqli_connect("127.0.0.1", "root", "", "website_selecao_loja");
    }

    public function query($string_query){
        return mysqli_query($this -> conn, "$string_query");
    }

    public function __destruct()
    {
        mysqli_close($this -> conn);
    }

}

?>