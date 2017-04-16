<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Util;

$teste = new Util();
$listaDados = $teste->fizzBuzz();
$totalLista = count($listaDados);
?>
< <a href="index.php">Voltar</a>
<h3>Resposta</h3>
<table>
<?php for($i =0; $i < $totalLista; $i++){ ?>
	<tr>
		<td><?=$listaDados[$i];?></td>
	</tr>
<?php } ?>
</table>
< <a href="index.php">Voltar</a>