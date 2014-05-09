<?php
$this->breadcrumbs=array(
	'Diario De Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List diario_de_classe', 'url'=>array('index')),
	array('label'=>'Manage diario_de_classe', 'url'=>array('admin')),
);
?>

<h1>Create diario_de_classe</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>