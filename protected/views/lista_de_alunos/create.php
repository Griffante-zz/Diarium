<?php
$this->breadcrumbs=array(
	'Lista De Alunoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List lista_de_alunos', 'url'=>array('index')),
	array('label'=>'Manage lista_de_alunos', 'url'=>array('admin')),
);
?>

<h1>Create lista_de_alunos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>