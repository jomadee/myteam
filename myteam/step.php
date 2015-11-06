<?php
/**
*
* myteam
*
* @Versão 2.0
* @Licença http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

$dados = mysql_fetch_assoc(mysql_query('select * from '.appTabela.' where id = "'.$_GET['id'].'"'));
?>

<div class="boxCenter" >
	<form class="form" action="<?php echo $_ll['app']['onserver'].'&id='.$_GET['id'];?>" method="post" enctype="multipart/form-data">
		<fieldset>
			
			<div>
				<table>
					<tr>
						<td>
							<label>Name</label>
							<input type="text"  <?php $item = 'name';  echo 'name="'.$item.'"'.(isset($dados[$item])?'value="'.$dados[$item].'"': '') ?> />
						</td>
						<td style="width: 50px;">
							<label>Order</label>
							<input type="text"  <?php $item = 'job_title';  echo 'name="'.$item.'"'.(isset($dados[$item])?'value="'.$dados[$item].'"': '') ?> />
						</td>
					</tr>
				</table>			
			</div>
	
			
			<div>
				<label>Tags</label>							
				<?php
				$tagTag = new tags ();
				$tagTag->config ( PREFIXO . 'myteam_tags', $dados['id'], 'person' );
				
				echo $tagTag;
				?>
			</div>
			
			<div>
				<label>Description</label>
				<textarea name='text'>
				<?php echo $dados['text']; ?>
				</textarea>  
			</div>
			
			<div>
				<?php 
				$file = new fileup; 						
				$file->titulo = array('Photo'); 			
				$file->rotulo = array('Select a photo'); 	
				$file->registro = array($dados['photo']);
				$file->campo = array('photo'); 				
				$file->extencao = 'png jpg'; 				
				$file->form(); 		
				?>
			</div>

		</fieldset>
		<div class="botoes">
			<button type="submit" class="confirm">Save</button>
			<a href="<?php echo $_ll['app']['home']?>">Back</a>
		</div>
	</form>
</div>

<script>
	tinymce.init({
		selector: "textarea",
		plugins: [
				"advlist autolink autosave link lists hr",
				"code fullscreen nonbreaking"
		],

		toolbar1: "bold italic underline strikethrough removeformat | alignleft aligncenter alignright alignjustify | bullist numlist | link unlink | code",
		
		menubar: false,
		toolbar_items_size: 'small'
	});
	
	ajustaForm();
</script>
