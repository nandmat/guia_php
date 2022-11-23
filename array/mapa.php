<div class="titulo">Mapa</div>

<?php 

$dados = array(
    'idade' => 25,
    'cor' => 'verde',
    'peso' => 50.45
    );

print_r($dados);
echo '<br>';
echo $dados['idade'];
echo '<br>' . $dados['cor'];
echo '<br>' . $dados['peso'];