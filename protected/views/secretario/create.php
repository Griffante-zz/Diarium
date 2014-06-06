<?php
$this->breadcrumbs=array(
	'Secretarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List secretario', 'url'=>array('index')),
	array('label'=>'Manage secretario', 'url'=>array('admin')),
);
?>

<h1>Create secretario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'user'=>$user)); ?>