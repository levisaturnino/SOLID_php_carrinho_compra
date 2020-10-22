<?php
require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho = new CarrinhoCompra();

print_r($carrinho->exibirItens());



echo "<br />";
print_r($carrinho->exibirItens());
echo "<br />";
echo 'valor total recalculado: '.$carrinho->exibirValorTotal();

echo "<br />";
echo "status: ".$carrinho->exibirStatus();
echo "<br />";
if($carrinho->confirmarPedido()){
    echo 'Pedido realizado com sucesso!';
}else{
    echo 'Erro na confirmação do pedido. Carrinho não possui itens';
}

echo "<br />";
echo "status: ".$carrinho->exibirStatus();