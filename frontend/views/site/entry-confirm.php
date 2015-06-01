<?php
/**
 * Created by PhpStorm.
 * User: LYK
 * Date: 2015/6/1
 * Time: 15:41
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>