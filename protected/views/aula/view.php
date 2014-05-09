<?php
$this->breadcrumbs=array('Disciplinas'=>array('site/page', 'view'=>'disciplinas'),
	$model->diario0->turma0->disciplina0->nome=>array('disciplina/view','id'=>$model->diario0->turma0->disciplina0->id), 
	'Aula '.$model->id." (".date('d/m/Y', strtotime($model->data)).")",
);

$this->menu=array(
	array('label'=>'Banco de Dados I', 'url'=>array('index')),
	array('label'=>'Banco de Dados II', 'url'=>array('index')),
);

?>
<div class='view' >

<h1>Di&#225rio de Classe</h1>
<div class="freq">
<table>
	<tr>
		<th width=10><b>Diário</b></th>
		<td><?php echo $model->diario0->id; ?></td>
		<th width=100><b>Período Letivo</b></th>
		<td><?php echo $model->diario0->periodo; ?></td>
		<th width=10><b>Turma</b></th>
		<td><?php echo $model->diario0->turma0->nome; ?></td>
	</tr>
</table>

<table>
	<tr>
		<th width=10>Disciplina</th>
		<td><?php echo $model->diario0->turma0->disciplina0->nome; ?></td>
	</tr>
	<tr>
		<th><b>Professor</b></th>
		<td><?php echo $model->diario0->turma0->professor0->nome; ?></td>
	</tr>
	<tr>
		<th><b>Etapa</b></th>
		<td><?php echo $model->diario0->etapa; ?></td>
	</tr>
</table>

<hr>

<form>
	<h3><?php echo date('d/m/Y', strtotime($model->data)); ?></h3>
	<h2>Conteúdo:</h2>
	<textarea rows="4" cols="50"><?php echo $model->conteudo; ?>			 </textarea>
	<br>
	<h2>Controle de Frequência:</h2> 
	
	<table>
		<tr>
			<th width=200>Nome do Aluno</th>
			<th>Presença</th>
		</tr>
		<?php 
			foreach($model->frequencias as $frequencia){
				
				
				if($frequencia->presenca == 'P'){
					$presenca = "checked";
				}
				else{
					$presenca = "";
				}
					
				echo "<tr>";
				echo "	<td>".$frequencia->aluno0->nome."</td>";
				echo "	<td><input type='checkbox' name='".$frequencia->aluno0->nome."' value='1' ".$presenca.">Presente<br></td>";
				echo "</tr>";
			}
		?>
	</table>
	
	<input type='submit' value='Salvar'>
</form>
</div>
</div>




