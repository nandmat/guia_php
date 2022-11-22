<div class="titulo">String</div>

<?php 

echo 'Eu sou uma Strnig <br>';
var_dump('Eu também');

echo '<br>'.strtoupper('maximizando');
echo '<br>'.strtolower('MINIMIZANDO');
ECHO '<br>'.ucfirst('só a primeira letra');
echo '<br>'.ucwords('todas as palavras');
echo '<br>'. strlen('quantas letras?');
echo '<br>'. mb_strlen("eu também", "utf-8");
echo '<br>'. substr('Só uma parte mesmo', 7, 6);
echo '<br>'. str_replace('isso', 'aquilo', 'trocar por isso isso');