<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = Exchanger::convert(isset($model->seo_title) && !empty($model->seo_title) ?  $model->seo_title : $model->title);
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = Exchanger::convert(isset($model->seo_description) && !empty( $model->seo_description) ?  $model->seo_description : ($model->description ?: Yii::app()->getModule('yupe')->siteDescription));
$this->keywords = Exchanger::convert(isset($model->seo_keywords) &&  !empty( $model->seo_keywords ?  $model->seo_keywords : ( $model->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords )));

$phone1 = isset($this->yupeSettings['phone1']) ? $this->yupeSettings['phone1']['param_value'] : '';
$phone1 = preg_replace ('/<(|\/)(?!\?).*?(|\/)>/', '', $phone1);

?>

<div class="contact holder">
    <ul class="breadcrumbs">
        <li><a href="/">Главная</a></li>
        <li><?=$model->title?></li>
    </ul>
    <div class="wrap-col">

            <div class="col" itemscope itemtype="http://schema.org/Organization">
			<span itemprop="name" style="display:none;">МНОП Екатеринбург</span> 
                <ul class="list" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <li>
                            <h3>ТЕЛЕФОН</h3>
                            <span itemprop="telephone"><?=$phone1?><br></span>
                            <span itemprop="telephone"><?=isset($this->yupeSettings['phone2']['param_value'])?$this->yupeSettings['phone2']['param_value']:''?></span>
                        </li>
					<?php if(isset($this->yupeSettings['address']['param_value'])):?>
                        <li>
                            <h3>АДРЕС</h3>
                            <?=$this->yupeSettings['address']['param_value']?>
							<span itemprop="postalCode">620034</span>
                        </li>
                    <?php endif;?>
					<?php if(isset($this->yupeSettings['schedule']['param_value'])):?>
                        <li>
                            <h3>ГРАФИК РАБОТЫ</h3>
                            <?=str_replace(',', '<br>', $this->yupeSettings['schedule']['param_value']);?>
                        </li>
                    <?php endif;?>
					<?php if(isset($this->yupeSettings['email2']['param_value'])):?>
                        <li>
                            <h3>E-MAIL</h3>
                            <a itemprop="email" href="mailto:<?=$this->yupeSettings['email2']['param_value'];?>"><?=$this->yupeSettings['email2']['param_value'];?></a>
                        </li>
                    <?php endif;?>
                </ul>
                <a href="#modal-call" class="call link open-modal">Задайте свой вопрос</a> <!-- b24-web-form-popup-btn-13 -->
            </div>
            <div class="col">
                <?php if(!empty($this->yupeSettings['map'])):?>
                    <iframe src="<?=$this->yupeSettings['map']['param_value']?>" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
                <?php endif; ?>
            </div>

    </div>
</div>
