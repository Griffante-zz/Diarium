<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->matricula,
);

$this->menu=array(
	array('label'=>'List aluno', 'url'=>array('index')),
	array('label'=>'Create aluno', 'url'=>array('create')),
	array('label'=>'Update aluno', 'url'=>array('update', 'id'=>$model->matricula)),
	array('label'=>'Delete aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->matricula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage aluno', 'url'=>array('admin')),
);
?>

<h1>View aluno #<?php echo $model->matricula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'matricula',
		'nome',
		'endereco',
		'dataNascimento',
	),
)); ?>
