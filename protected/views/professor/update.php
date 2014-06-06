<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Professores'=>array('index'),
	$model->id.'. '.$model->nome=>array('view', 'id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar professores', 'url'=>array('index')),
	array('label'=>'Inserir professor', 'url'=>array('create')),
	array('label'=>'Visualizar professor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar professor', 'url'=>array('admin')),
);
?>

<h1>Editar professor <?php echo $model->id.'. '.$model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'user'=>$user)); ?>