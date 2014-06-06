<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulacao')); ?>:</b>
	<?php echo CHtml::encode($data->titulacao); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->id0->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->id0->username); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->id0->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->id0->email); ?>
	<br />


</div>