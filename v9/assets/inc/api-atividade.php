<?php
 
include("configuration.php");
 
$app = new Sql();
 
$_GET['id'];
 
$result = $app->query("SELECT * FROM tb_produtos WHERE id_prod=$id");
 
if (mysqli_num_rows($result) > 0) {
    $produto = mysqli_fetch_assoc($result);
    header('Content-Type :application/json');
    echo json_encode($produto);
} else {
    http_response_code(404); //mensagem servidor
    echo "Produto nao encontrado"; //mensagem usuario
}
 
?>
 