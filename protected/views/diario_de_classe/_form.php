<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'diario-de-classe-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo'); ?>
		<?php echo $form->textField($model,'periodo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etapa'); ?>
		<?php echo $form->textField($model,'etapa',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'etapa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'turma'); ?>
		<?php echo $form->textField($model,'turma'); ?>
		<?php echo $form->error($model,'turma'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->