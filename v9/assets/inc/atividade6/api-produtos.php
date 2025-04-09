<?php

$busca = $_GET['produtos'];

$conn = mysqli_connect ("localhost", "root", "", "website_selecao_loja");
    if (!$conn){
        http_response_code(500);
        die(json_encode(['error'=>'erro de conexão com o banco de dados'.mysqli_connect_error()]));

    }else{
        $sql = "SELECT id_prod, nome_prod_curto, id_cat, preco from
        tb_produtos where nome_prod_curto like '%".$busca."%'";
        
    };

    $result = mysqli_query($conn, $sql);
    $produtos = [];
    if ($result){
        while($row = $result -> fetch_assoc()){
            $produtos[] = $row;
        }
    }else{
        https_response_code(500);
        die(json_decode(['error' => 'erro de conexão com o banco de dados'.mysqli]));
    }

    echo json_encode($produtos);
?>