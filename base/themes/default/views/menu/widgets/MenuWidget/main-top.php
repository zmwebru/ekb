<?php if(!empty($this->params['items'])):?>
    <ul role="navigation">
        <?php foreach ($this->params['items'] as $item):?>
           <li><a href="<?=$item['url']?>"><?=$item['label']?></a></li>
        <?php endforeach;?>
    </ul>
<?php endif;?>