<?php
$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List horario', 'url'=>array('index')),
	array('label'=>'Create horario', 'url'=>array('create')),
	array('label'=>'Update horario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete horario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage horario', 'url'=>array('admin')),
);
?>

<h1>View horario #<?php echo $model->id; ?></h1>

<?php 
/*
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'grade',
		'dia',
		'inicio',
		'termino',
	),
)); */?>
