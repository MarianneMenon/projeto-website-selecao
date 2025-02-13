<?php
 
include("configuration.php");
 
$app = new Sql();
 
$app->query("select * from tb_produtos");
 
if($result){
    $produtos = [];
    while($row = mysqli_fetch_assoc($result)){
        $produtos[] = $row;
    }
 
header('Content-Type: application/json');
echo json_encode($produtos);
}else {
    http_response_code(500);
    echo "Erro na consulta ao Banco de Dados";
}
 
 
?>