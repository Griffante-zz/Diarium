<?php

if(isset($_GET['curso'])){
	$curso=$_GET['curso'];
	$model->curso=$curso;
}
	
$this->breadcrumbs=array(
		'Cadastros'=>array("site/page&view=cadastros"),
		'Cursos'=>array('index'),
		$model->curso0->id.'. '.$model->curso0->nome=>array('curso/view&id='.$model->curso0->id),
		'Incluir disciplina',
);

$this->menu=array(
	array('label'=>'List matriz_curricular', 'url'=>array('index')),
	array('label'=>'Manage matriz_curricular', 'url'=>array('admin')),
);
?>

<h1>Incluir disciplina ao Curso: </h1>
<h1><?php echo $model->curso0->id.'. '.$model->curso0->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>