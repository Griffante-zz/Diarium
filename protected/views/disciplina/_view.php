<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ementa')); ?>:</b>
	<?php echo CHtml::encode($data->ementa); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('carga_horaria')); ?>:</b>
	<?php echo CHtml::encode($data->carga_horaria." horas"); ?>
	<br />

</div>