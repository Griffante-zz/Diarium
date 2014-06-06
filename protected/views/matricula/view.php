<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List matricula', 'url'=>array('index')),
	array('label'=>'Create matricula', 'url'=>array('create')),
	array('label'=>'Update matricula', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete matricula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage matricula', 'url'=>array('admin')),
);
?>

<h1>View matricula #<?php echo $model->id; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'curso',
		'matricula',
	),
)); ?>
