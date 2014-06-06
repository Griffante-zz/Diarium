<?php
$this->breadcrumbs=array(
	'Avaliacaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List avaliacao', 'url'=>array('index')),
	array('label'=>'Manage avaliacao', 'url'=>array('admin')),
);
?>

<h1>Create avaliacao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'turma'=>$turma)); ?>