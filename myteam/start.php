<?php
/**
*
* myteam
*
* @Versão 1.0
* @Licença http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

$botoes = array(
	array('href' => $backReal, 'img' => $_ll['tema']['icones'].'br_prev.png', 'title' => $backNome)
	);

if(!isset($_GET['id'])){
	$botoes[] = array('href' => $_ll['app']['home'].'&id', 'img' => $_ll['app']['pasta'].'img/memb[16].png', 'title' => '');
}

echo app_bar('Quem somos', $botoes);

require_once(( isset($_GET['id']) ? 'step' : 'home' ).".php");
?>
