<?php
$this->breadcrumbs=array(
	'Professors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List professor', 'url'=>array('index')),
	array('label'=>'Create professor', 'url'=>array('create')),
	array('label'=>'Update professor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete professor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage professor', 'url'=>array('admin')),
);
?>

<h1>View professor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'email',
		'titulacao',
	),
)); ?>
