<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->user->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->user->username); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->user->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->user->email); ?>
	<br />


</div>