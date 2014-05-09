<?php
$this->breadcrumbs=array(
	'Frequencias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List frequencia', 'url'=>array('index')),
	array('label'=>'Create frequencia', 'url'=>array('create')),
	array('label'=>'View frequencia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage frequencia', 'url'=>array('admin')),
);
?>

<h1>Update frequencia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>