<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Disciplinas'=>array('index'),
	$model->id.'. '.$model->nome=>array('view','id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar disciplinas', 'url'=>array('index')),
	array('label'=>'Inserir disciplina', 'url'=>array('create')),
	array('label'=>'Visualizar disciplina', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar disciplinas', 'url'=>array('admin')),
);
?>

<h1>Editar disciplina <?php echo $model->id.'. '.$model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>