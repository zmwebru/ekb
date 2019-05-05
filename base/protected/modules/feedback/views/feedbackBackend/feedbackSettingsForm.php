<div class="feedbackSettingsForm">
	<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
        'id' => 'form-inline',
        // 'type' => 'horisontal',
        'action' => Yii::app()->createUrl('/backend/saveTest'),
        'enableClientValidation' => false,
        'clientOptions'=>array(
            'validateOnSubmit'=>false,
            'afterValidate'=>'js:saveEmailSettings',
        )
    ]); 

	?>
		<div class="form-inline">
		<div class="control-group form-group">
			<label>Список email: </label>
			<input type="text" name="emails[]" placeholder="email1, email2, ....." id='emails' class="form-control" value="<?=$emails->param_value;?>">
			<span class="btn btn-success btn-sm save-btn">Сохранить</span>
		</div>
		</div>
		
		<?php $this->endWidget(); ?>
		
	<?php
	$assets = Yii::app()->getAssetManager()->publish(
		Yii::getPathOfAlias('feedback.views.assets')
	);
	Yii::app()->getClientScript()->registerScriptFile($assets . '/js/jquery.tagsinput.js');
	Yii::app()->getClientScript()->registerCssFile($assets . '/css/jquery.tagsinput.css');
	?>	
		
	<script>
		$(function(){
			
			$('#emails').tagsInput({
				'defaultText': 'добавить',
				'height':'40px',
				'width':'400px',
				'delimiter': [','],
				'placeholderColor' : '#eaeaea'
			});
			
		});
		
		
		function saveEmailSettings(form, data, hasError){
			 if (hasError) {
				return false;
			}

			$.ajax({
				method: 'POST',
				url: form.attr('action'),
				data: form.serialize(),
				dataType: 'json',
				success: function(data){
					var type = data.result ? 'success' : 'danger';
					$('#notifications').notify({message:{text:data.message},type:type}).show();
				}
			});

			return false;
		}
		
		$('#form-inline .save-btn').click(function(){ 
			var form = $(this).closest('form'), 
				data = form.serialize(), 
				hasError = false;
			saveEmailSettings(form, data, hasError);
		});
	</script>

</div>