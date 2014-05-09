<?php
$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->matricula=>array('view','id'=>$model->matricula),
	'Update',
);

$this->menu=array(
	array('label'=>'List aluno', 'url'=>array('index')),
	array('label'=>'Create aluno', 'url'=>array('create')),
	array('label'=>'View aluno', 'url'=>array('view', 'id'=>$model->matricula)),
	array('label'=>'Manage aluno', 'url'=>array('admin')),
);
?>

<h1>Update aluno <?php echo $model->matricula; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>