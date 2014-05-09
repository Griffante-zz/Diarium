<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo')); ?>:</b>
	<?php echo CHtml::encode($data->periodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('etapa')); ?>:</b>
	<?php echo CHtml::encode($data->etapa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('turma')); ?>:</b>
	<?php echo CHtml::encode($data->turma); ?>
	<br />


</div>