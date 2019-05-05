<?php
use yupe\widgets\YWidget;

/**
 * Class ContactFormWidget
 */
class ContactFormWidget extends YWidget
{
    /**
     * @var string
     */
    public $view = 'contacts';

    /**
     * @throws CException
     */
    public function run()
    {
        $model = new CallBackForm();
        $module = Yii::app()->getModule('feedback');

        $this->render($this->view, [
            'model' => $model,
            'module' => $module,
        ]);
    }
}