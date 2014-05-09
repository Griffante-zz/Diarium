<?php
$this->breadcrumbs=array(
	'Frequencias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List frequencia', 'url'=>array('index')),
	array('label'=>'Create frequencia', 'url'=>array('create')),
	array('label'=>'Update frequencia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete frequencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage frequencia', 'url'=>array('admin')),
);
?>

<h1>View frequencia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'aula',
		'aluno',
		'presenca',
	),
)); ?>
