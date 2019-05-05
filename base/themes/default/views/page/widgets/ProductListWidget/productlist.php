<?php 
if(!empty($products)):?>
    <ul class="product-list">
        <?php foreach($products as $product):?>
            <li>
                <a href="<?=Yii::app()->createUrl('/page/page/view', ['slug' => $product->slug]);?>">
                    <?=Exchanger::convert($product->title)?>
					<div style="background-image: url('')" class="preview_image"></div>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
<?php endif;?>