<?php
$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List curso', 'url'=>array('index')),
	array('label'=>'Create curso', 'url'=>array('create')),
	array('label'=>'Update curso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage curso', 'url'=>array('admin')),
);
?>

<h1>View curso #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'coordenador',
	),
)); ?>
