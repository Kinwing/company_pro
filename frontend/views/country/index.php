<h1>Countries</h1>
<ul>
<?php
/**
 * Created by PhpStorm.
 * User: LYK
 * Date: 2015/6/1
 * Time: 17:02
 */
foreach($countries as $country){?>
    <li>
        <?= \yii\helpers\Html::encode("{$country->name} ({$country->code})") ?>:
        <?= $country->population ?>
    </li>

<?php }?>
</ul>
<?=\yii\widgets\LinkPager::widget(['pagination'=>$pagination]) ?>