<?php
$this->breadcrumbs=array(
	'Secretarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List secretario', 'url'=>array('index')),
	array('label'=>'Create secretario', 'url'=>array('create')),
	array('label'=>'View secretario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage secretario', 'url'=>array('admin')),
);
?>

<h1>Update secretario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>