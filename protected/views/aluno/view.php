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
	array('label'=>'Excluir aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Você tem certeza que deseja excluir este aluno?')),
	array('label'=>'Gerenciar alunos', 'url'=>array('admin')),
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
			'value'=>date('d/m/Y', strtotime($model->data_nascimento)),
		),
		array(
			'label'=>'Curso',
			'value'=>$model->matricula0->curso.'. '.$model->matricula0->curso0->nome,
		),
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
