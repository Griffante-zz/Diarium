<?php
$this->breadcrumbs=array(
		'Disciplinas'=>array("site/page&view=disciplinas"),
		$model->turma0->disciplina0->nome=>array('disciplina/view','id'=>$model->turma0->disciplina0->id),
		'Avaliação '.$model->id,
);

?>

<div class='view' >

<h1>Avaliação <?php echo $model->id?></h1>
<div class="freq">
<table>
	<tr>
		<th width=10><b>Turma</b></th>
		<td><?php echo $model->turma0->nome; ?></td>
		<th width=100><b>Data</b></th>
		<td><?php echo $model->data; ?></td>
		<th width=10><b>Horário</b></th>
		<td><?php echo $model->horario0->inicio." às ".$model->horario0->termino; ?></td>
	</tr>
</table>
<hr>
<br>
	<h2>Registro de Notas:</h2> 
	
	<table>
		<tr>
			<th>Nome do Aluno</th>
			<th width=100>Nota</th>
		</tr>
	 		<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'avaliacao_aluno-form',
				'enableAjaxValidation'=>false,
			)); 
			
			$lista = array();
			$notas = array();
			
			foreach($model->avaliacao_alunos as $avaliacao){
				
				$lista[$avaliacao->aluno0->id] = $avaliacao->aluno0->nome;
				$notas[$avaliacao->aluno0->id] = $avaliacao->nota;
				
			}
			
			asort($lista);
			$ids = array_flip($lista);
			
			foreach ($lista as $aluno){

								
				echo "<tr>";
				echo "	<td>".$aluno."</td>";
				echo "	<td>".$form->textField($avaliacao, 'nota')."</td>";
				echo "</tr>";
				

			}

		?>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>
</div>

<?php $this->endWidget(); ?>

</div>

	
