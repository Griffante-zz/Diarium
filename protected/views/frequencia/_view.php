<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aula')); ?>:</b>
	<?php echo CHtml::encode($data->aula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aluno')); ?>:</b>
	<?php echo CHtml::encode($data->aluno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presenca')); ?>:</b>
	<?php echo CHtml::encode($data->presenca); ?>
	<br />


</div>