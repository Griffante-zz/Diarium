<?php
$this->breadcrumbs=array('Disciplinas'=>array('site/page', 'view'=>'disciplinas'),
	$model->turma0->disciplina0->nome=>array('disciplina/view','id'=>$model->turma0->disciplina0->id), 
	"Cálculo de Médias e Frequências",
);

$this->menu=array(
	array('label'=>'List lista_de_alunos', 'url'=>array('index')),
	array('label'=>'Create lista_de_alunos', 'url'=>array('create')),
	array('label'=>'Update lista_de_alunos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete lista_de_alunos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage lista_de_alunos', 'url'=>array('admin')),
);
?>

<h1>Cálculo de Médias e Frequências</h1>
<div class="freq">
<table>
	<tr>
		<th width=10><b>Diário</b></th>
		<td><?php echo $model->id; ?></td>
		<th width=100><b>Período Letivo</b></th>
		<td><?php echo $model->periodo; ?></td>
		<th width=10><b>Turma</b></th>
		<td><?php echo $model->turma0->nome; ?></td>
	</tr>
</table>

<table>
	<tr>
		<th width=10>Disciplina</th>
		<td><?php echo $model->turma0->disciplina0->nome; ?></td>
	</tr>
	<tr>
		<th><b>Professor</b></th>
		<td><?php echo $model->turma0->professor0->nome; ?></td>
	</tr>
	<tr>
		<th><b>Etapa</b></th>
		<td><?php echo $model->turma0->diario->etapa; ?></td>
	</tr>
</table>

<hr>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'diario_de_classe-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); ?>
	
	<table>
		<tr>
			<th width=400>Nome do Aluno</th>
			<th>Frequência (%)</th>
			<th>Avaliações</th>
			<th>Média</th>
			<th>Exame</th>
			<th>M. Final</th>
		</tr>
		<?php 
		
			foreach($model->turma0->lista_de_alunoses as $item){
				
				echo "<tr>";
				echo "	<td>".$item->aluno->nome."</td>";
				echo "	<td>100,00</td>";
				echo "	<td>10,00 - 10,00 - 10,00</td>";
				echo "	<td>";
				echo $form->textField($model,'etapa', array('maxlength'=>5, 'size'=>3)); 
				echo $form->error($model,'etapa'); 
				echo "</td>";
				echo "	<td>";
				echo $form->textField($model,'etapa', array('maxlength'=>5, 'size'=>3)); 
				echo $form->error($model,'etapa'); 
				echo "</td>";
				echo "	<td>10,00</td>";
				echo "</tr>";
			}
			
		?>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
</div>

<?php
 /* $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Turma',
		'Aluno',
		'numero',
	),
));*/ ?>
