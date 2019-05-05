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
 * Class ProductsSidebarWidget
 */
class ProductsSidebarWidget extends yupe\widgets\YWidget
{
    /**
     * @var
     */
    public $parent_id = 28;
    /**
     * @var string
     */
    public $view = 'productssidebar';

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
        $criteria = new CDbCriteria();
		$criteria->addCondition("parent_id = {$this->parent_id}");
        
		$pages = Page::model()->cache($this->cacheTime)->findAll($criteria);
		
		foreach($pages as &$page){
			$criteriaProducts = new CDbCriteria();
			$criteriaProducts->addCondition("category_id = {$page->category_id} AND parent_id IS NULL");
			$products = Page::model()->cache($this->cacheTime)->findAll($criteriaProducts);
			$page->products = $products;
		}
				
        $this->render(
            $this->view,
            [
                'pages' => $pages,
            ]
        );

    }
}
