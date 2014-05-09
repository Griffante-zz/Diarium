<?php
$this->breadcrumbs=array(
	'Professors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List professor', 'url'=>array('index')),
	array('label'=>'Create professor', 'url'=>array('create')),
	array('label'=>'View professor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage professor', 'url'=>array('admin')),
);
?>

<h1>Update professor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>