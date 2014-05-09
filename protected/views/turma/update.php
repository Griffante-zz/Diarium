<?php
$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List turma', 'url'=>array('index')),
	array('label'=>'Create turma', 'url'=>array('create')),
	array('label'=>'View turma', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage turma', 'url'=>array('admin')),
);
?>

<h1>Update turma <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>