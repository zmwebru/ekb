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
 * Class ProductListWidget
 */
class ProductListWidget extends yupe\widgets\YWidget
{
    /**
     * @var
     */
    public $category_id = null;
    /**
     * @var string
     */
    public $view = 'productlist';

    public function init()
    {
        parent::init();
        $this->category_id = (int)$this->category_id;
    }

    /**
     * @throws CException
     */
    public function run()
    {
        $criteria = new CDbCriteria();
		$products = [];
		
		if(!is_null($this->category_id) && $this->category_id > 0){
			$criteria->addCondition("category_id = {$this->category_id} AND parent_id IS NULL");
			$products = Page::model()->findAll($criteria);
		} 
		
		$this->render(
			$this->view,
			[
				'products' => $products,
			]
		);	
		 
    }
}
