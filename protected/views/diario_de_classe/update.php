<?php
$this->breadcrumbs=array(
	'Diario De Classes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List diario_de_classe', 'url'=>array('index')),
	array('label'=>'Create diario_de_classe', 'url'=>array('create')),
	array('label'=>'View diario_de_classe', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage diario_de_classe', 'url'=>array('admin')),
);
?>

<h1>Update diario_de_classe <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>