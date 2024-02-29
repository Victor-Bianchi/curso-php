<div class="titulo">Funções para Manipulação de Datas</div>

<?php

/**
 * D: Sat (Saturday)
 * d: 12 (dia do mês)
 * m: 09 (número do mês)
 * M: Feb (February)
 * y: 24 (final do ano)
 * Y: 2024 (ano completo)
 * l: Monday
 * F: December
 * \d\e: inserir "de"
 * \/: inserir '/'
 */

echo time().'<br>';
echo date('D, d \d\e M \d\e Y').'<br>';
echo date('d\/m\/y h:i:s A');

echo '<br>';
echo '<br>';

date_default_timezone_set('America/Sao_Paulo');
echo date('D, d \d\e M \d\e Y').'<br>';
echo date('d\/m\/y H:i:s');

echo '<br>';
echo '<br>';

$data = mktime(23, 59, 59, 12, 31, 2012);
echo date('l, d \d\e F \d\e Y', $data);