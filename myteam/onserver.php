<?php
/**
*
* myteam
*
* @Vers�o 2.0
* @Licen�a http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if(!empty($_POST) && isset($_GET['id'])){
	$apigem = new api;
	$apigem->iniciaApi('fileup');
	
	$file = new fileup; 											
	$file->diretorio = '../uploads/myteam/';
	$file->up();

	echo jf_update(appTabela, $_POST, array('id' => $_GET['id']));
	
	header('location:'.$_ll['app']['home']);
}
?>