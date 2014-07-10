<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Cursos'=>array('index'),
	$model->id.'. '.$model->nome=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar cursos', 'url'=>array('index')),
	array('label'=>'Inserir curso', 'url'=>array('create')),
	array('label'=>'Visualizar curso', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar cursos', 'url'=>array('admin')),
);
?>

<h1>Editar curso <?php echo $model->id.'. '.$model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>