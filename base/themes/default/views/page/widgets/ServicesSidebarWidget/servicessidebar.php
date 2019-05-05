<?php if(!empty($pages)):?>
    <ul class="service-list">
        <?php foreach($pages as $page):?>
            <li>
                <a href="<?=Yii::app()->createUrl('/page/page/view', ['slug' => $page->slug]);?>">
                    <?=Exchanger::convert($page->title)?>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
<?php endif;?>