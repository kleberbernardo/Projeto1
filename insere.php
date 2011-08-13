<?php

require_once('./Banco.php');

if($_POST) {
	$novo = new Banco;
	$novo->inserir('tasks', $_POST);
}
