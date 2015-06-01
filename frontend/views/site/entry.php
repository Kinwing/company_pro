<?php
/**
 * Created by PhpStorm.
 * User: LYK
 * Date: 2015/6/1
 * Time: 15:42
 */
$form=\yii\widgets\ActiveForm::begin();
echo $form->field($model,'name');
echo $form->field($model,'email');
?>
<div class="form-group">
        <?= \yii\helpers\Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php \yii\widgets\ActiveForm::end();?>
