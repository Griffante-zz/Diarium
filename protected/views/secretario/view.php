<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Secretários'=>array('index'),
	$model->id.'. '.$model->nome,
);

$this->menu=array(
	array('label'=>'Listar secretários', 'url'=>array('index')),
	array('label'=>'Inserir secretário', 'url'=>array('create')),
	array('label'=>'Editar secretário', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir secretário', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que deseja excluir este secretário?')),
	array('label'=>'Gerenciar secretários', 'url'=>array('admin')),
);
?>

<h1>Secretário <?php echo $model->id.'. '.$model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		array(         
            'label'=>'Username',
            'value'=>$model->user->username,
        ),
		array(
				'label'=>'Password',
				'value'=>$model->user->password,
		),
		array(
				'label'=>'E-mail',
				'value'=>$model->user->email,
		),
	),
)); ?>
