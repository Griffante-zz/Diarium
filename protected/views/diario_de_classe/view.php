<?php
$this->breadcrumbs=array(
	'Diario De Classes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List diario_de_classe', 'url'=>array('index')),
	array('label'=>'Create diario_de_classe', 'url'=>array('create')),
	array('label'=>'Update diario_de_classe', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete diario_de_classe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage diario_de_classe', 'url'=>array('admin')),
);
?>

<h1>View diario_de_classe #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'periodo',
		'etapa',
		'turma',
	),
)); ?>
