<?php
$this->breadcrumbs=array(
	'Matriculas',
);

$this->menu=array(
	array('label'=>'Create matricula', 'url'=>array('create')),
	array('label'=>'Manage matricula', 'url'=>array('admin')),
);
?>

<h1>Matriculas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
