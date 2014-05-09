<?php
$this->breadcrumbs=array(
	'Matriz Curriculars',
);

$this->menu=array(
	array('label'=>'Create matriz_curricular', 'url'=>array('create')),
	array('label'=>'Manage matriz_curricular', 'url'=>array('admin')),
);
?>

<h1>Matriz Curriculars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
