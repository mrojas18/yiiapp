<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_pro')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'nom_pro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'des_pro')->textInput(['maxlength' => true]) ?>

    

    <div class="form-group">
         
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
