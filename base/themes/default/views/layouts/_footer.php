<?php
$socials = [
    ['name' => 'vk','value' =>  isset($this->yupeSettings['social_vk']) ? $this->yupeSettings['social_vk']['param_value'] : ''],
    ['name' => 'facebook', 'value' => isset($this->yupeSettings['social_facebook']) ? $this->yupeSettings['social_facebook']['param_value'] : ''],
    ['name' => 'youtube', 'value' => isset($this->yupeSettings['social_yuotube']) ? $this->yupeSettings['social_yuotube']['param_value'] : ''],
    ['name' => 'instagram', 'value' => isset($this->yupeSettings['social_instagram']) ? $this->yupeSettings['social_instagram']['param_value'] : ''],
];

$infos = [
    'telefon' => isset($this->yupeSettings['phone1']) ? $this->yupeSettings['phone1']['param_value'] : '',
    'address' => isset($this->yupeSettings['address']) ? $this->yupeSettings['address']['param_value'] : '',
    'zip' => isset($this->yupeSettings['zip']) ? $this->yupeSettings['zip']['param_value'] : '',
    'schedule' => isset($this->yupeSettings['schedule']) ? $this->yupeSettings['schedule']['param_value'] : '',
];

?>
<!-- содержание -->
<div id="widget_container">
<div id="widget" class="widget_bg left button">

		<div class="widget_circle">
							<img src="https://poverka-pro.ru/uploads/image/dc4ce6a8d94ce334fe7baaeee903131a.png" class="widget_logo hey">
							<img src="https://poverka-pro.ru/uploads/image/d3a98601e94ac8a40991ddcf71964cf7.png" class="widget_close">
							<span>Загляни</span>
		</div>
		<div class="widget_box">	
		<div class="widget_btns">
		<!-- H -->
			<!-- <h4>Вступайте в нашу группу в ВК<br>И следите за новостями</h4> -->
			<!-- vk -->
				<a href="https://vk.com/nmopekb" target="_blank">
					<img src="https://poverka-pro.ru/uploads/image/92d900ea4524880f3d4b8f8f87ada03f.jpg">
				</a>
		</div>
		</div>
	</div>
</div>
<!-- / -->
<div id="footer">
    <div class="footer-bar">
        <div class="holder" itemscope itemtype="https://schema.org/LocalBusiness">
            <div>
                <a href="/" class="logo" alt="logo" title="НМОП Екатеринбург">
                    <img itemprop="logo" src="<?= Yii::app()->getTheme()->getAssetsUrl() . "/images/logo.png"; ?>" alt="logo">
					<!-- google --> <img style="display:none;" itemprop="image url" src="https://poverka-pro.ru/assets/53c08c8c/images/logo.png" >
                </a>
				<div class="min_text" itemprop="name">Независимое Метрологическое <br>Обеспечение Потребителя</div>
				<div class="min_text" itemprop="description">НМОП в Екатеринбурге</div>
                <span class="copyright">2014 - <?=date('Y')?> &copy; Все права защищены</span>
            </div>
            
            <div>
                <a itemprop="url" href="/" title="Официальный представитель НОМП в Екатеринбурге">poverka-pro.ru</a>
                <span class="tel" itemprop="telephone"><?php  echo  $infos['telefon'] ?></span>
            </div>
            <div>
                <p><?=str_replace(',', ',</p><p>', $infos['schedule'] );?></p>
				<div> <?php if(isset($this->yupeSettings['email2']['param_value'])):?>
                            <a itemprop="email" href="mailto:<?=$this->yupeSettings['email2']['param_value'];?>"><?=$this->yupeSettings['email2']['param_value'];?></a>
                    <?php endif;?></div>
            </div>
			<span itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
            <div>
                <p itemprop="postalCode"><?=$infos['zip']?></p>
            </div>
            <div>
                    <p><?=str_replace(';', ',</p><p>', $infos['address']);?></p>
             </div>
			 </span>
			 <div itemprop="geo" itemscope="" itemtype="https://schema.org/GeoCoordinates"> 
				  <meta itemprop="latitude" content="56.851510"> 
				  <meta itemprop="longitude" content="60.546756"> 
			</div> 
			<span style="display:none;" itemprop="priceRange"> 250, 7500 RUB</span>
        </div>
    </div>
    <div class="footer-nav holder">
        <div>
            <span class="info">Разработка и продвижение - <a href="http://zmweb.ru/" title="Разработка и SEO">zMWeb.ru</a></span>
        </div>
        <div>
            <span>Карта&nbsp;сайта</span>
            <?php  if (Yii::app()->hasModule('menu')): ?>
                <?php $this->widget('application.modules.menu.widgets.MenuWidget', [
                    'name' => 'main',
                    'layout' => 'main-top'
                ]); ?>
            <?php endif;  ?>
        </div>
    </div>
</div>
<!-- modals -->
<div id="modal-call" class="popup">
    <a href="#" class="close">close</a>
    <h3>Обратный звонок</h3>
	<?php $this->widget("application.modules.feedback.widgets.ContactFormWidget"); ?>
	<div class="info-user">
		<span>
			<!-- <input id="check" type="checkbox" name="check" value="check" checked> -->Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом 
			от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных
		</span>
	</div>
</div>

        <!-- modals -->
        <div id="modal-call" class="popup">
            <a href="#0" class="close">close</a>
            <h3>Обратный звонок</h3>
            <form class="form" action="#">
                <fieldset>
                    <input type="text" id="tel" name="tel" placeholder="+7(_ _ _) _ _-_ _ _ -_ _"/>
                    <input type="text" name="address"  placeholder="Адрес поверки / замены"/>
                    <textarea  placeholder="Ваше сообщение"></textarea>
                    <input type="submit" value="Отправить">
                </fieldset>
            </form>
        </div>
<div id="overlay"></div>