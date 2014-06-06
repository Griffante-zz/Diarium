<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nota')); ?>:</b>
	<?php echo CHtml::encode($data->nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aluno')); ?>:</b>
	<?php echo CHtml::encode($data->aluno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avaliacao')); ?>:</b>
	<?php echo CHtml::encode($data->avaliacao); ?>
	<br />


</div>