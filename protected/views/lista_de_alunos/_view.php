<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Turma')); ?>:</b>
	<?php echo CHtml::encode($data->Turma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Aluno')); ?>:</b>
	<?php echo CHtml::encode($data->Aluno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />


</div>