<?php if(!empty($pages)):?>
    <ul class="categories-list">
        <?php foreach($pages as $page):?>
            <li>
                <a href="<?=Yii::app()->createUrl('/page/page/view', ['slug' => $page->slug]);?>">
                    <?=Exchanger::convert($page->title)?>
                </a>
				<?php if(!empty($page->products)):?>
					<ul class="sublist">
						<?php foreach($page->products as $product):?>
							<li>
								<a href="<?=Yii::app()->createUrl('/page/page/view', ['slug' => $product->slug]);?>">
									<?=Exchanger::convert($product->title)?>
								</a>
							</li>
						<?php endforeach;?>
					</ul>
				<?php endif;?>
            </li>
        <?php endforeach;?>
    </ul>
<?php endif;?>