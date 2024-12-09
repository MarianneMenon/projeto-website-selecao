<?php



include("header.php");

?>


<section>	
	<div class="container" id="destaque-produtos-container">
		<div id="destaque-produtos">	
			<div class="item">
                <div class="row">

                    <div class="col-sm-6 col-imagem">
                        <img src="assets/images/produtos/camisa1-selecao.jpg" alt="Nome do Produto" width="300px">
                    </div>

                    <div class="col-sm-6 col-descricao">
                        <h2>Camisa 1 Seleção</h2>
                        <div class="box-valor">
                            <div class="text-noboleto text-arial-cinza">no boleto</div>
                            <div class="text-por text-arial-cinza">por</div>
                            <div class="text-reais text-verde">R$</div>
                            <div class="text-valor text-verde">399</div>
                            <div class="text-valor-centavos text-verde">,50</div>
                            <div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 49,93</div>
                            <div class="text-total text-arial-cinza">total a prazo R$ 499,50</div>	
                        </div>
                        <a href="#" class="btn btn-comprar text-verde"><i class="fa fa-shopping-cart"></i> compre agora</a>
                    </div>

                </div>
			</div>
		</div>
		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>
	</div>
</section>
<?php
    include("footer.php")
?>