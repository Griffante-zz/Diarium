<?php
$this->breadcrumbs=array(
	'Turmas',
);

$this->menu=array(
	array('label'=>'Create turma', 'url'=>array('create')),
	array('label'=>'Manage turma', 'url'=>array('admin')),
);
?>

<h1>Turmas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
