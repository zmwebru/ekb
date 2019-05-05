<?php
/**
 * PagesWidget виджет для вывода страниц
 *
 * @author yupe team <team@yupe.ru>
 * @link http://yupe.ru
 * @copyright 2009-2013 amyLabs && Yupe! team
 * @package yupe.modules.page.widgets
 * @since 0.1
 *
 */
Yii::import('application.modules.page.models.*');

/**
 * Class ServicesSidebarSimpleWidget
 */
class ServicesSidebarSimpleWidget extends yupe\widgets\YWidget
{
    /**
     * @var
     */
    public $parent_id = 2;
    /**
     * @var string
     */
    public $view = 'servicessidebar';

    public function init()
    {
        parent::init();
        $this->parent_id = (int)$this->parent_id;
    }

    /**
     * @throws CException
     */
    public function run()
    {
        $criteria = new CDbCriteria(['order' => '`order` DESC']);
        
        if ($this->parent_id) {
            $criteria->addCondition("parent_id = {$this->parent_id}");
        }
        
        $this->render(
            $this->view,
            [
                'pages' => Page::model()
                                        // ->cache($this->cacheTime)
                                        ->findAll($criteria),
            ]
        );

    }
}
