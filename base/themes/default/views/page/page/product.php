<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = Exchanger::convert(isset($model->seo_title) && !empty($model->seo_title) ? $model->seo_title : $model->title);
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->description ? Exchanger::convert($model->description): Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->keywords ? Exchanger::convert($model->keywords ): Yii::app()->getModule('yupe')->siteKeyWords;
?>

<div class="service-box holder">
    <ul class="breadcrumbs">
        <li><a href="/">Главная</a></li>
        <li><a href="/products">Товары</a></li>
        <li><?= Exchanger::convert($model->title_short ? $model->title_short : $model->title); ?></li>
    </ul>
    <div class="main">
        <div class="aside">
            <h3>Категории</h3>
            <?php $this->widget('application.modules.page.widgets.ProductsSidebarWidget'); ?>
        </div>
        <div class="content">
			<div class="title-box">
				<h1><?= Exchanger::convert($model->title_short ? $model->title_short : $model->title); ?></h1>
				<!-- <a href="#modal-call" class="call link open-modal">Заказать услугу</a> -->
			</div>
            <?= Exchanger::convert($model->body); ?>
        </div>
    </div>
</div>
