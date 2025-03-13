<?php
include("configuration.php");

$app = new Sql();

$result = $app->query("SELECT id_prod,nome_prod_curto,id_cat,preco FROM tb_produtos;");

$produtos = [];
while($row = mysqli_fetch_assoc($result)){
    $produtos[] = $row;
}

//header('Content-Type: application/json');
//echo json_encode($produtos);

//Criando Tabela em HTML dentro arquivo PHP
echo '<table border = "3">';
echo '<thead><tr>';
foreach (array_keys($produtos[0]) as $coluna){
    echo "<th>$coluna</th>";
}

echo '</tr></thead>';
echo '<tbody>';
foreach ($produtos as $produto){
    echo '<tr>';
        foreach ($produto as $dado){
            echo "<td>$dado</td>";
        }
    echo '</tr>';
}
   
echo '</tbody></table>';

echo '<br>';
echo '<br>';
echo '<br>';

?>