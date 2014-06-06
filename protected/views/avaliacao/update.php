<?php
$this->breadcrumbs=array(
	'Avaliacaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List avaliacao', 'url'=>array('index')),
	array('label'=>'Create avaliacao', 'url'=>array('create')),
	array('label'=>'View avaliacao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage avaliacao', 'url'=>array('admin')),
);
?>

<h1>Update avaliacao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>