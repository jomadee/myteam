<?php
/**
*
* myteam
*
* @Vers�o 2.0
* @Desenvolvedor Jeison Frasson <jomadee@lliure.com.br>
* @Entre em contato com o desenvolvedor <jomadee@lliure.com.br> http://www.lliure.com.br/
* @Licen�a http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
define('appTabela', PREFIXO.'myteam');


if(isset($_GET['id']) && empty($_GET['id'])){
	jf_insert(appTabela);
	header('location: '.$_ll['app']['home'].'&id='.$jf_ultimo_id);
	die();
}

$apigem = new api; 
$apigem->iniciaApi('navigi');

$apigem->inicia('tags');
?>