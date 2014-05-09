<?php
$this->breadcrumbs=array(
	'Lista De Alunoses',
);

$this->menu=array(
	array('label'=>'Create lista_de_alunos', 'url'=>array('create')),
	array('label'=>'Manage lista_de_alunos', 'url'=>array('admin')),
);
?>

<h1>Lista De Alunoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
