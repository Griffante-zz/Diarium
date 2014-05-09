<?php
$this->breadcrumbs=array(
	'Matriz Curriculars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List matriz_curricular', 'url'=>array('index')),
	array('label'=>'Create matriz_curricular', 'url'=>array('create')),
	array('label'=>'View matriz_curricular', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage matriz_curricular', 'url'=>array('admin')),
);
?>

<h1>Update matriz_curricular <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>