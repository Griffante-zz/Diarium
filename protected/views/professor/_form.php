<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'professor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulacao'); ?>
		<?php /*echo $form->textField($model,'titulacao',array('size'=>12,'maxlength'=>12));*/
				echo $form->dropDownList($model,'titulacao',
											array(
														'graduado'=>'Graduação',
														'especialista'=>'Pós-Graduação',	
														'mestre'=>'Mestrado',
														'doutor'=>'Doutorado',
												));
		?>
		<?php echo $form->error($model,'titulacao'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($user,'username'); ?>
		<?php echo $form->textField($user,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user,'password'); ?>
		<?php echo $form->passwordField($user,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user,'email'); ?>
		<?php echo $form->textField($user,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->