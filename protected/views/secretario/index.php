<?php
$this->breadcrumbs=array(
	'Secretarios',
);

$this->menu=array(
	array('label'=>'Create secretario', 'url'=>array('create')),
	array('label'=>'Manage secretario', 'url'=>array('admin')),
);
?>

<h1>Secretarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
