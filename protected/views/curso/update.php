<?php
$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List curso', 'url'=>array('index')),
	array('label'=>'Create curso', 'url'=>array('create')),
	array('label'=>'View curso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage curso', 'url'=>array('admin')),
);
?>

<h1>Update curso <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>