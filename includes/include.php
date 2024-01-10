<div class="titulo">Include</div>

<?php

echo "Hello World!  ";
include('include_arquivo.php');
# include('include_arquivo.php'); ### Fatal error: Cannot redeclare soma() ### -- Para resolver isso, podemos fazer uma validação com o function_exists()

echo soma(10, 20);
echo "<br>Carregando variável: {$var_include}";