<?php
$this->breadcrumbs=array(
	'Professors',
);

$this->menu=array(
	array('label'=>'Create professor', 'url'=>array('create')),
	array('label'=>'Manage professor', 'url'=>array('admin')),
);
?>

<h1>Professors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
