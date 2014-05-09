<?php
$this->breadcrumbs=array(
	'Aulas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List aula', 'url'=>array('index')),
	array('label'=>'Create aula', 'url'=>array('create')),
	array('label'=>'View aula', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage aula', 'url'=>array('admin')),
);
?>

<h1>Update aula <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>