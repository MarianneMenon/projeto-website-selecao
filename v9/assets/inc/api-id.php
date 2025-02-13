<?php

include("configuration.php");

$app = new Sql();

$id = $_GET['id'];

$result = $app->query ("SELECT * FROM tb_produtos WHERE id_prod=$id");

if (mysqli_num_rows($result) > 0) {
    $produto = mysqli_fetch_assoc($result);
    header('Content-Type :application/json');
    echo json_encode($produto);
} else {
    http_response_code(404); //mensagem servidor
    echo "Produto não encontrado"; //mensagem usuario
}

echo '<table>';
'<br>';
echo '<h1>Teste tabela HTML</h1>';
echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ipsam, neque tenetur laudantium nam repellat a! Impedit neque omnis, quidem beatae fuga sapiente illo qui nemo hic magnam rem facere.</p>';
echo'</table>';

?>

