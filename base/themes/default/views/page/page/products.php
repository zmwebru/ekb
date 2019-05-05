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

<div class="services-box holder">
    <ul class="breadcrumbs">
        <li><a href="/">Главная</a></li>
        <li><?= Exchanger::convert($model->title_short); ?></li>
    </ul>
    <h1><?= Exchanger::convert($model->title_short); ?></h1>
    <div class="main">
        <div class="aside">
			<div class="serv-wrap">
				<h3>Категории:</h3>
				<!-- <div class="red-line"></div> -->
				<?php $this->widget('application.modules.page.widgets.ProductsSidebarWidget'); ?>
				<!-- <div class="blue-line"></div> -->
			</div>
        </div>
        <div class="content">
            <?= Exchanger::convert($model->body); ?>
        </div>
    </div>
</div>
