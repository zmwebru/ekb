<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$seo_title = $model->getContent('seo_title');

$this->title = !empty($seo_title) ? $seo_title : $model->getContent('title');

$this->title = Exchanger::convert(isset($model->seo_title) && !empty($model->seo_title) ? $model->seo_title : $model->title);
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->description ? Exchanger::convert($model->description): Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->keywords ? Exchanger::convert($model->keywords ): Yii::app()->getModule('yupe')->siteKeyWords;
?>

<div class="content">
    <h1><?= Exchanger::convert($model->title); ?></h1>
    <?= Exchanger::convert($model->body); ?>
</div>
