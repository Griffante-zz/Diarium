<?php
/* @var $this SiteController */
/*
$this->pageTitle=Yii::app()->name . ' - Aula';
$this->breadcrumbs=array(
	'Aula',
);


<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diario')); ?>:</b>
	<?php echo CHtml::encode($data->diario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario')); ?>:</b>
	<?php echo CHtml::encode($data->horario); ?>
	<br />


</div>
*/
?>
<p>Bem-vindo <?php echo 'Professor'; ?></p>

<h1>Diário de Classe</h1>

<table>
	<tr>
		<td width=10><b><?php echo "Diário"; ?></b></td>
		<td>1</td>
		<td width=100><b>Período Letivo</b></td>
		<td>2014/1</td>
		<td width=10><b>Turma</b></td>
		<td>2014.1/INFO</td>
	</tr>
</table>

<table>
	<tr>
		<td width=10><b>Disciplina</b></td>
		<td>Banco de Dados</td>
	</tr>
	<tr>
		<td><b>Professor</b></td>
		<td>Rogério Tessari</td>
	</tr>
	<tr>
		<td><b>Etapa</b></td>
		<td>1º Semestre</td>
	</tr>
</table>

<hr>

<form>
	<h3>23/04/2014</h3>
	<h2>Conteúdo:</h2>
	<textarea rows="4" cols="50">
				 
	</textarea>
	<br>
	<h2>Controle de Frequência:</h2> 
	<table>
		<tr>
			<th width=200>Nome do Aluno</th>
			<th>Presença</th>
		</tr>
		<tr>
			<td>Aluno 1</td>
			<td><input type="checkbox" name="presenca" value="1">Presente<br></td>
		</tr>
		<tr>
			<td>Aluno 2</td>
			<td><input type="checkbox" name="presenca" value="1">Presente<br></td>
		</tr>
		<tr>
			<td>Aluno 3</td>
			<td><input type="checkbox" name="presenca" value="1">Presente<br></td>
		</tr>
		<tr>
			<td>Aluno 4</td>
			<td><input type="checkbox" name="presenca" value="1">Presente<br></td>
		</tr>
	</table>
</form>

