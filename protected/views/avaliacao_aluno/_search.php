<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nota'); ?>
		<?php echo $form->textField($model,'nota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aluno'); ?>
		<?php echo $form->textField($model,'aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avaliacao'); ?>
		<?php echo $form->textField($model,'avaliacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->