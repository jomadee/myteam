<?php
/**
*
* myteam
*
* @Versão 2.0
* @Licença http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

$botoes = array(
	array('href' => $backReal, 'fa' => 'fa-chevron-left', 'title' => $backNome)
	);

if(!isset($_GET['id'])){
	$botoes[] = array('href' => $_ll['app']['home'].'&id', 'img' => $_ll['app']['pasta'].'img/memb[16].png', 'title' => '');
}

echo app_bar('My team', $botoes);

require_once(( isset($_GET['id']) ? 'step' : 'home' ).".php");
?>
