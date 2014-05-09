<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'frequencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'aula'); ?>
		<?php echo $form->textField($model,'aula'); ?>
		<?php echo $form->error($model,'aula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aluno'); ?>
		<?php echo $form->textField($model,'aluno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presenca'); ?>
		<?php echo $form->textField($model,'presenca',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'presenca'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->