<?php
$this->breadcrumbs=array(
	'Cadastros'=>array("site/page&view=cadastros"),
	'Alunos'=>array('index'),
	$model->id.'. '.$model->nome,
);

$this->menu=array(
	array('label'=>'Listar alunos', 'url'=>array('index')),
	array('label'=>'Inserir aluno', 'url'=>array('create')),
	array('label'=>'Editar aluno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Voc� tem certeza que deseja excluir este aluno?')),
	array('label'=>'Gerenciar aluno', 'url'=>array('admin')),
);
?>

<h1>Aluno <?php echo $model->id.'. '.$model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'matricula',
		'nome',
		'endereco',
		array(
			'label'=>'Data de Nascimento',
			'value'=>date('d/m/Y', strtotime($model->dataNascimento)),
		),
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
