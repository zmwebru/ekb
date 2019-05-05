<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START); 
	$settings = Yii::app()->getModule('yupe')->getParams(); ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="ru-RU" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="yandex-verification" content="fe67eb406c0e8667" />
	<meta name="format-detection" content="telephone=yes">
	<meta name="copyright" lang="ru" content="НМОП Екатеринбург" />
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<!-- og -->
	<meta property="og:site_name" content="НМОП Екатеринбург - поверка счетчиков воды"/>
	<!-- <meta property="og:title" content="Поверка счетчиков | Екатеринбург"/>
	<meta property="og:description" content="Быстрая поверка счетчиков Мы стараемся сделать всё чисто и быстро что бы у вас небыло хлапот и вы не теряли время - НМОП Екатеринбург"/> -->
	<!-- meta in -->
	<title><?= !empty($this->seo_title) ? $this->seo_title : $this->title;?></title>
    <meta name="description" content="<?= Exchanger::convert($this->description);?>" />
    <meta name="keywords" content="<?= Exchanger::convert($this->keywords);?>" />
	<?php if(isset($this->seo_title)):?>
        <meta name="title" content="<?= $this->seo_title ?>" />
    <?php endif;?>

    <?php if ($this->canonical): ?>
        <link rel="canonical" href="<?= $this->canonical ?>" />
    <?php endif; ?>

    <?php
	Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery-1.11.1.js');
	
    // Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/main.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/flags.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/yupe.css');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/blog.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.li-translit.js');
    ?>
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
    <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://yandex.st/highlightjs/8.2/styles/github.min.css">
    <script src="https://yastatic.net/highlightjs/8.2/highlight.min.js"></script>
    <?php  \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END);?>


    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic" rel="stylesheet">
    <?php
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/slick-theme.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/slick.css');
	Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/btn_main.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/all.css');
	
	Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery-1.11.1.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/function_btn.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/maskinput.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slick.min.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/main.js');
    ?>
	
	<?php 
		$settingsRows = Yii::app()->db->createCommand("SELECT param_name, param_value FROM {{yupe_settings}} WHERE module_id = 'yupe' ")->queryAll();
		$meta = array_filter($settingsRows, function($item){ return $item['param_name'] == 'meta'; });
		if(!empty($meta)){
			$meta = array_shift($meta);
			echo !empty($meta) ? Exchanger::convert($meta['param_value']) : '';
		}
	?>
</head>

<body>

<?php  \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_START);?>

<!-- container -->
<div id="wrapper">
    <?php $this->renderPartial('//layouts/_header'); ?>
    <div class="">
        <?= $content; ?>
    </div>
    <!-- footer -->
    <?php $this->renderPartial('//layouts/_footer'); ?>
    <!-- footer end -->
</div>

<!-- <a href="#modal-call" class="call-link open-modal">call</a> -->
<a href="#modal-call" class="call mail-link open-modal" title="Обратная связь">Задайте свой вопрос</a>

<?php if (Yii::app()->hasModule('contentblock')): ?>
    <?php $this->widget(
        "application.modules.contentblock.widgets.ContentBlockWidget",
        ["code" => "STAT", "silent" => true]
    ); ?>
<?php endif; ?>


<?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_END);?>

<?php $this->renderPartial('//layouts/_metrika');?>

</body>
</html>
