<div class="view">
	<?php 
   
		//$grade = $data->grade;
		$grade=1;
		
		$sql = "SELECT 
					h.inicio,
					CASE d.dia 
						WHEN 'domingo' THEN d.id
						ELSE '' 
					END as domingo,
					CASE s.dia 
						WHEN 'segunda' THEN s.id 
						ELSE ''
					END as segunda,
					CASE t.dia 
						WHEN 'terca' THEN t.id 
						ELSE '' 
					END as terca,
					CASE q.dia
						WHEN 'quarta' THEN q.id 
						ELSE ''
					END as quarta,
					CASE w.dia
						WHEN 'quinta' THEN w.id 
						ELSE '' 
					END as quinta,
					CASE u.dia
						WHEN 'sexta' THEN u.id 
						ELSE ''
					END as sexta,
					CASE x.dia 
						WHEN 'sabado' THEN x.id
						ELSE ''
					END as sabado, 
					h.termino
				FROM horario H
				left join horario s on h.inicio = s.inicio and s.grade = h.grade and s.dia = 'segunda'
				left join horario t on h.inicio = t.inicio and t.grade = h.grade and t.dia = 'terca'
				left join horario q on h.inicio = q.inicio and q.grade = h.grade and q.dia = 'quarta'
				left join horario w on h.inicio = w.inicio and w.grade = h.grade and w.dia = 'quinta'
				left join horario u on h.inicio = u.inicio and u.grade = h.grade and u.dia = 'sexta'
				left join horario x on h.inicio = x.inicio and x.grade = h.grade and x.dia = 'sabado'
				left join horario d on h.inicio = d.inicio and d.grade = h.grade and d.dia = 'domingo' 
				where h.grade = 1
			    group by h.inicio, h.termino";
		
		//$count = Yii::app()->db->createCommand($sql)->queryScalar();
		$dataProvider = new CSqlDataProvider($sql,
								array(
										'keyField'=>'inicio',
										'pagination'=>false,
								)
							);
		$this->widget('zii.widgets.grid.CGridView', array(
				'dataProvider'=>$dataProvider,
				'columns'=>array(
						'inicio::Início',
						'domingo::Domingo',
						'segunda::Segunda-feira',
						'terca::Terça-feira',
						'quarta::Quarta-feira',		
						'quinta::Quinta-feira',
						'sexta::Sexta-feira',
						'sabado::Sábado',
						'termino::Término',
					
				),
		));
		

		
		
	?>
</div>