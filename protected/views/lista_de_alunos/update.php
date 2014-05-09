<?php
$this->breadcrumbs=array(
	'Lista De Alunoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List lista_de_alunos', 'url'=>array('index')),
	array('label'=>'Create lista_de_alunos', 'url'=>array('create')),
	array('label'=>'View lista_de_alunos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage lista_de_alunos', 'url'=>array('admin')),
);
?>

<h1>Update lista_de_alunos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>