<?php
$this->breadcrumbs=array(
	'Disciplinas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List disciplina', 'url'=>array('index')),
	array('label'=>'Manage disciplina', 'url'=>array('admin')),
);
?>

<h1>Create disciplina</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>