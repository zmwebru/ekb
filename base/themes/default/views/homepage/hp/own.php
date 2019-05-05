<?php
/* @var $page Page */
/* @var $this PageController */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];

$this->title = Exchanger::convert(isset($page->seo_title) && !empty($page->seo_title) ?  $page->seo_title : $this->title);
$this->description = Exchanger::convert(isset($page->seo_description) && !empty( $page->seo_description) ?  $page->seo_description : ($page->description ?: Yii::app()->getModule('yupe')->siteDescription));
$this->keywords = Exchanger::convert(
    isset($page->seo_keywords) &&  !empty( $page->seo_keywords) 
        ?  $page->seo_keywords : 
        ( $page->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords )
   );


$phone1 = isset($this->yupeSettings['phone1']) ? $this->yupeSettings['phone1']['param_value'] : '';
$phone1 = preg_replace ('/<(|\/)(?!\?).*?(|\/)>/', '', $phone1);

$siteDescription = isset($this->yupeSettings['siteDescription']) ? $this->yupeSettings['siteDescription']['param_value'] : '';

?>

<div class="intro-box holder">
<a class="float-right" href="kak-prohodit-poverka-teploschetchikov" title="Как проходит поверка теплосчетчиков">Смотрите как проходит поверка теплосчетчиков</a>
    <h1><?=$siteDescription?></h1>
    <div class="wrap-col">
        <div class="col">
			<!-- <img class="nmop_img" src="/uploads/image/f4c074f2e5b1eb21e72a056fcadf3c07.png"/> -->
            <!-- <p class="text">
				Официальный представитель компании ООО "Независимое Метрологическое Обеспечение Потребителя" в Екатеринбурге.
			</p> -->
            <strong><?=$phone1?></strong>
			<div class="cena_header">Поверка водосчетчиков от 380 рублей</div>
			<div class="cena_header">Поверка теплосчетчиков от 2200 рублей</div>
            <a href="#modal-call" class="call open-modal" title="Заказать поверку">Заказать</a>
        </div>
    </div>
</div>
<!-- ez content -->
<div class="calk-box holder">
    <?php if (Yii::app()->hasModule('contentblock')): ?>
        <?php $this->widget('application.modules.contentblock.widgets.ContentBlockWidget', [
            'code' => 'poterya-vashih-deneg-v-sluchae-istecheniya-srokov-poverki-ili-zameny-pribora',
            'view' => 'homepage-block'
        ]); ?>
    <?php endif; ?>
</div>
<!-- de comment -->
<div class="text-box holder">
    <?php if (Yii::app()->hasModule('contentblock')): ?>
        <?php $this->widget('application.modules.contentblock.widgets.ContentBlockWidget', [
            'code' => 'akred',
            'view' => 'homepage-block'
        ]); ?>
    <?php endif; ?>
</div>
<div class="gallery-box holder">
	<div><a class="flamp-widget" href="//ekaterinburg.flamp.ru/firm/nmop_ekaterinburg_metrologicheskaya_sluzhba-70000001036047301"  data-flamp-widget-type="responsive-new" data-flamp-widget-id="70000001036047301" data-flamp-widget-width="100%" data-flamp-widget-count="1">Отзывы о нас на Флампе</a><script>!function(d,s){var js,fjs=d.getElementsByTagName(s)[0];js=d.createElement(s);js.async=1;js.src="//widget.flamp.ru/loader.js";fjs.parentNode.insertBefore(js,fjs);}(document,"script");</script></div>
  <!--  <?//php if (Yii::app()->hasModule('contentblock')): ?>
        <?//php $this->widget('application.modules.contentblock.widgets.ContentBlockWidget', [
            //'code' => 'otzyvy-o-nashey-rabote',
            //'view' => 'homepage-block'
       // ]); ?>
    <?//php endif; ?> -->
</div>

<div class="list-box">
	<div class="wrap-list">
		<ul class="holder">
			<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
			<!-- VK Widget -->
			<div id="vk_groups"></div>
			<script type="text/javascript">
			VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, width: "auto", height: "400"}, 176875868);
			</script>
		</ul>
	</div>
 <!--  <?//php if (Yii::app()->hasModule('contentblock')): ?>
        <?//php $this->widget('application.modules.contentblock.widgets.ContentBlockWidget', [
            //'code' => 'kak-prohodit-poverka',
            //'view' => 'homepage-block'
        //]); ?>
    <?//php endif; ?> -->
</div>



<div class="article holder">
    <?php if (Yii::app()->hasModule('contentblock')): ?>
        <?php $this->widget('application.modules.contentblock.widgets.ContentBlockWidget', [
            'code' => 'seo-zagolovok-dlya-teksta-v-bloke-kontenta',
            'view' => 'homepage-block'
        ]); ?>
    <?php endif; ?>
</div>
