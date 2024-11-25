<?php

class sql {
    public $conn;

    public function __construct()
    {
         return $this -> conn = mysqli_connection("127.0.0.1","root","12345678","website_selecao_loja");
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