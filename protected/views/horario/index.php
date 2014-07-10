<?php
$this->breadcrumbs=array(
	'Horários',
);

$this->menu=array(
	array('label'=>'Criar horário', 'url'=>array('create')),
	array('label'=>'Gerenciar horário', 'url'=>array('admin')),
);
?>

<h1>Horários</h1>

 <?php  $this->widget('zii.widgets.CListView', array(
 	'dataProvider'=>$dataProvider,
 	'itemView'=>'_view',
 )); ?>
