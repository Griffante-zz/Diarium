<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matriz-curricular-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'curso'); ?>
		<?php echo $form->textField($model,'curso'); ?>
		<?php echo $form->error($model,'curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disciplina'); ?>
		<?php echo $form->textField($model,'disciplina'); ?>
		<?php echo $form->error($model,'disciplina'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->