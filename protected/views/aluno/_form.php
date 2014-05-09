<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aluno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'matricula'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataNascimento'); ?>
		<?php echo $form->textField($model,'dataNascimento'); ?>
		<?php echo $form->error($model,'dataNascimento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->