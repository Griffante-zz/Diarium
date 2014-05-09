<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List matricula', 'url'=>array('index')),
	array('label'=>'Create matricula', 'url'=>array('create')),
	array('label'=>'View matricula', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage matricula', 'url'=>array('admin')),
);
?>

<h1>Update matricula <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>