<?php
$phone1 = isset($this->yupeSettings['phone1']) ? $this->yupeSettings['phone1']['param_value'] : '';
$phone2 = isset($this->yupeSettings['phone2']) ? $this->yupeSettings['phone2']['param_value'] : '';
$phone3 = isset($this->yupeSettings['phone3']) ? $this->yupeSettings['phone3']['param_value'] : '';
$email = isset($this->yupeSettings['email2']) ? $this->yupeSettings['email2']['param_value'] : '';

$socials = [
    ['name' => 'vk','value' =>  isset($this->yupeSettings['social_vk']) ? $this->yupeSettings['social_vk']['param_value'] : ''],
    ['name' => 'facebook', 'value' => isset($this->yupeSettings['social_facebook']) ? $this->yupeSettings['social_facebook']['param_value'] : ''],
    ['name' => 'youtube', 'value' => isset($this->yupeSettings['social_yuotube']) ? $this->yupeSettings['social_yuotube']['param_value'] : ''],
    ['name' => 'instagram', 'value' => isset($this->yupeSettings['social_instagram']) ? $this->yupeSettings['social_instagram']['param_value'] : ''],
];

$siteCity = isset($this->yupeSettings['siteCity']) ? $this->yupeSettings['siteCity']['param_value'] : 'Екатеринбург';

?>
<!-- вывод на страницу --> <div class="layer" id="id_layer"></div> <!-- / -->
<div id="header">
    <div class="top-bar holder">
        <div>
            <a class="logo"
                href="/" title="НМОП Екатеринбург" alt="logo">
                <img src="<?= Yii::app()->getTheme()->getAssetsUrl() . "/images/logo.png"; ?>" alt="logo">
            </a>
			<span class="description_logo">Независимое Метрологическое<br>Обеспечение Потребителя Екатеринбург</span>
        </div>
        <div>
            <strong>Поверка счетчиков воды и тепла в Екатеринбурге</strong>
        </div>
        <div>
            <strong class="tel"><?=$phone1?></strong>
            <span class="tel-red"><?=$phone2?></span>
            <a href="#modal-call" class="call open-modal" title="Обратная связь">Заказать обратный звонок</a>
        </div>
    </div>
    <div class="nav-bar">
        <div class="holder">
            <a href="#" class="opener"><span></span><span></span><span></span></a>
            <a href="/"<?= Yii::app()->createUrl('/'); ?>" class="logo-fix" alt="logo" title="НМОП Екатеринбург">
                <img src="<?= Yii::app()->getTheme()->getAssetsUrl() . "/images/logo-fix.png"; ?>" alt="logo">
            </a>

            <?php  if (Yii::app()->hasModule('menu')): ?>
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', [
                    'name' => 'main',
                    'layout' => 'main-top'
                ]); ?>
            <?php endif;  ?>
            <div class="tel-box">
                <strong class="tel"><?=$phone1?></strong>
                <a href="#modal-call" class="call open-modal" title="Обратная связь">Заказать обратный звонок</a>
            </div>
        </div>
    </div>
</div>
