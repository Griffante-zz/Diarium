<?php
$this->breadcrumbs=array(
	'Avaliacao Alunos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List avaliacao_aluno', 'url'=>array('index')),
	array('label'=>'Create avaliacao_aluno', 'url'=>array('create')),
	array('label'=>'Update avaliacao_aluno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete avaliacao_aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage avaliacao_aluno', 'url'=>array('admin')),
);
?>

<h1>View avaliacao_aluno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nota',
		'aluno',
		'avaliacao',
	),
)); ?>
