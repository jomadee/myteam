<?php
/**
*
* myteam
*
* @Versão 2.0
* @Licença http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

$navigi = new navigi();
$navigi->tabela = appTabela;
$navigi->query = 'select *, name as aname, if(name IS NULL, "NULL", name) as name from '.$navigi->tabela.' order by aname asc' ;
$navigi->delete = true;
$navigi->rename = true;
$navigi->config = array(
	'ico' => $_ll['app']['pasta'].'img/memb.png',
	'link' => $_ll['app']['home'].'&id=',
	'coluna' => 'name'
	);								
$navigi->monta();
?>
