<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Professores'=>array('index'),
	$model->id.'. '.$model->nome,
);

$this->menu=array(
	array('label'=>'Listar professores', 'url'=>array('index')),
	array('label'=>'Inserir professor', 'url'=>array('create')),
	array('label'=>'Editar professor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir professor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gerenciar professor', 'url'=>array('admin')),
);
?>

<h1>Professor <?php echo $model->id.'. '.$model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'titulacao',
		array(
		'label'=>'Username',
		'value'=>$model->id0->username,
		),
		array(
				'label'=>'Password',
				'value'=>$model->id0->password,
		),
		array(
				'label'=>'E-mail',
				'value'=>$model->id0->email,
),
	
	),
)); ?>
