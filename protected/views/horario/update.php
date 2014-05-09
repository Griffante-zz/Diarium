<?php
$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List horario', 'url'=>array('index')),
	array('label'=>'Create horario', 'url'=>array('create')),
	array('label'=>'View horario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage horario', 'url'=>array('admin')),
);
?>

<h1>Update horario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>