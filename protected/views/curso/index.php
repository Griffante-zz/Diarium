<?php
$this->breadcrumbs=array(
	'Cursos',
);

$this->menu=array(
	array('label'=>'Create curso', 'url'=>array('create')),
	array('label'=>'Manage curso', 'url'=>array('admin')),
);
?>

<h1>Cursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
