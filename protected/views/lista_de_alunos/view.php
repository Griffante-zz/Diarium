<?php
$this->breadcrumbs=array(
	'Lista De Alunoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List lista_de_alunos', 'url'=>array('index')),
	array('label'=>'Create lista_de_alunos', 'url'=>array('create')),
	array('label'=>'Update lista_de_alunos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete lista_de_alunos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage lista_de_alunos', 'url'=>array('admin')),
);
?>

<h1>View lista_de_alunos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Turma',
		'Aluno',
		'numero',
	),
)); ?>
