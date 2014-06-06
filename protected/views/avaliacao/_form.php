

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'avaliacao-form',
	'enableAjaxValidation'=>false,
));

?>

<div class="freq">
<table>
	<tr>
		<th width=10><b>Turma</b></th>
		<td><?php echo $turma->nome; ?></td>
		<th width=100><?php echo $form->labelEx($model,'peso'); ?></th>
		<td><?php echo $form->textField($model,'peso'); ?>
		    <?php echo $form->error($model,'peso'); ?></td>
		</tr>
</table>
<hr>
</div>

<div class="form">

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php //echo $form->textField($model,'data'); 
		?>
		<?php $this->widget(
			'zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'data',
			'model'=>$model,
		)
		); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario'); ?>
		<?php echo $form->textField($model,'horario'); 
		?>
		<?php echo $form->error($model,'horario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->