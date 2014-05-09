<?php
$this->breadcrumbs=array(
	'Disciplinas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List disciplina', 'url'=>array('index')),
	array('label'=>'Create disciplina', 'url'=>array('create')),
	array('label'=>'View disciplina', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage disciplina', 'url'=>array('admin')),
);
?>

<h1>Update disciplina <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>