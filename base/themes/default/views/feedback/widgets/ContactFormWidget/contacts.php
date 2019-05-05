<?php
/**
 * @var FeedbackForm $model
 * @var TbActiveForm $form
 * @var FeedbackModule $module
 */
?>


<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
	'id' => 'feedback-widget-form',
	'type' => 'vertical',
	'action' => ['/callbackSendForm'],
	'enableClientValidation' => true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
		'afterValidate'=>'js:feedbackWidgetFormSend',
	)
]); ?>
	<?= $form->errorSummary($model); ?>
	<fieldset>
		<h4>Ваш телефон:</h4>
		<input class="input-field" type="text" id="tel"  placeholder="+7(_ _ _) _ _-_ _ _ -_ _" name="CallBackForm[phone]">
		<h4>Куда прибыть специалисту:</h4>
		<input class="input-field" type="text" placeholder="Адрес поверки / замены" name="CallBackForm[address]">
		<textarea class="input-field "   placeholder="Ваше сообщение" name="CallBackForm[text]"></textarea>
		<span class="submit">Отправить</span>
	</fieldset>


<?php $this->endWidget(); ?>

<script type="text/javascript">
    function feedbackWidgetFormSend(form, data, hasError) {
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
                
		
                if (data.result) {
					form.find('textarea').closest('.textarea-box').removeClass('error');	
					form.find('input').closest('.row.no-padding').removeClass('error');	
                    form.trigger('reset');
					$(".close").click();
					alert('Спасибо! Сообщение отправлено.');
                }
            }
        });

        return false;
    }
    
    $('#feedback-widget-form .submit').click(function(){ 
		var form = $(this).closest('form'), 
			data = form.serialize(), 
			hasError = false;
			
		form.find('textarea').closest('.textarea-box').removeClass('error');	
		form.find('input').closest('.row.no-padding').removeClass('error');	
		form.find('input[type=phone]').each(function(){
			if($(this).val().length < 1){
				hasError = true;
				$(this).closest('.textarea-box').addClass('error');
				$(this).closest('.row.no-padding').addClass('error');
			}
		});
		
		feedbackWidgetFormSend(form, data, hasError);
	});
    
</script>