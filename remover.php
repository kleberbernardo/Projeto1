<?php

require_once('./Banco.php');

if($_POST) {
	$remove = new Banco;
	$remove->remover('tasks', $_POST['id']);
}
