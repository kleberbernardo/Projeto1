<?php

require_once('./Banco.php');

$novo = new Banco;
$tasks = $novo->listar('tasks');

foreach($tasks as $task) {
?>
	<li><?php echo $task['task'] ?> <img src='remover.gif' class="remover" id="<?php echo $task['id'] ?>" /></li>
<?php
}
