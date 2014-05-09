<?php
$this->breadcrumbs=array(
	'Professors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List professor', 'url'=>array('index')),
	array('label'=>'Manage professor', 'url'=>array('admin')),
);
?>

<h1>Create professor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>