<?php
/**
 * Дефолтный контроллер сайта:
 *
 * @category YupeController
 * @package  yupe.controllers
 * @author   YupeTeam <team@yupe.ru>
 * @license  BSD http://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD
 * @version  0.5.3 (dev)
 * @link     http://yupe.ru
 *
 **/
namespace application\controllers;

use yupe\components\controllers\FrontController;

use yupe\models\Settings;
use \FeedBack;
use \CallBack;
use \Yii;

class SiteController extends FrontController
{
    /**
     * Отображение главной страницы
     *
     * @return void
     */
    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     * Отображение для ошибок:
     *
     * @return void
     */
    public function actionError()
    {
        $error = \Yii::app()->errorHandler->error;

        if (empty($error) || !isset($error['code']) || !(isset($error['message']) || isset($error['msg']))) {
            $this->redirect(['index']);
        }

        if (!\Yii::app()->getRequest()->getIsAjaxRequest()) {

            $this->render(
                'error',
                [
                    'error' => $error
                ]
            );
        }
    }
	
	
	public function actionCallbackSendForm(){
        $moduleFeedback = Yii::app()->getModule('feedback');
        $response = [
			'result' =>false,
			'data' => ''
		];
       
        $model = new FeedBack();
		$model->theme = 'Обратная связь - ' . Yii::app()->getModule('yupe')->siteCity;
		
        if (($data = Yii::app()->getRequest()->getPost('CallBackForm')) !== null) {
            $model->name = isset($data['name']) ? $data['name'] : '-';
            $model->phone = isset($data['phone']) ? $data['phone'] : '';
            $model->text =  
				(isset($data['address']) ? 'Адрес: ' . $data['address'] : '') . ' ' . 
				(isset($data['text']) ? $data['text'] : '');
			
			
            if ($model->save()) {
				$response['result'] = true;
				$response['data'] = 'Спасибо за обращение. Мы скоро с Вами свяжемся!';

				$emails = Settings::model()->find(
					'module_id = :module_id and param_name = :param_name',
					[':module_id' => 'feedback', ':param_name' => 'emails']
				);
                
				if(!empty($strEmails = $emails->param_value)){
					$emailList = explode(',',$strEmails);
                    $body = $this->renderPartial('callbackEmail', ['model' => $model], true);
    
                    $result = Yii::app()->mail->send(
                        Yii::app()->getModule('feedback')->notifyEmailFrom,
                        $emailList,
                        $model->theme . ' ' . Yii::app()->getModule('yupe')->siteCity,
                        $body
                    );
				}
            }
        }
		
		if(!empty($model->errors)){
			$response['data'] =  $model->errors;
		}
        
		die(json_encode($response));
		
	}
}
