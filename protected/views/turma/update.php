<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),		
	'Turmas'=>array('index'),
	$model->id.'. '.$model->nome=>array('view', 'id'=>$model->id),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar turmas', 'url'=>array('index')),
	array('label'=>'Inserir turma', 'url'=>array('create')),
	array('label'=>'Visualizar turma', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gerenciar turmas', 'url'=>array('admin')),
);
?>

<h1>Editar turma <?php echo $model->id.'. '.$model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>