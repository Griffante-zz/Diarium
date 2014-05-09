<?php
$this->breadcrumbs=array(
	'Matriz Curriculars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List matriz_curricular', 'url'=>array('index')),
	array('label'=>'Create matriz_curricular', 'url'=>array('create')),
	array('label'=>'Update matriz_curricular', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete matriz_curricular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage matriz_curricular', 'url'=>array('admin')),
);
?>

<h1>View matriz_curricular #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'curso',
		'disciplina',
	),
)); ?>
