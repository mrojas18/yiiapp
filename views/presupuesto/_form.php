<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use app\models\Proveedor;
use bootui\datepicker\Datepicker;
use yii\bootstrap\Button


/* @var $this yii\web\View */
/* @var $model app\models\Presupuesto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presupuesto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_pre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_prov')->dropDownList(ArrayHelper::map(Proveedor::find()->all(), 'id_prov', 'nom_prov')); ?>
    <?=
    $form->field($model, 'fec_pre')->widget(Datepicker::className(), [
        'format' => 'dd-mm-yyyy',
        'addon' => [
        //'prepend' => [Html::a('Fecha', '#', ['class' => 'btn btn-primary']), true], // prepend in single button, format [String $content, Boolean $asButton]
        //'append' => [// append in multiple button.
        //  [Button::widget(['label' => 'Action', 'options' => ['class' => 'btn-primary'], ]), true],
        //[bootui\Button::className(), ['label' => 'btn 3'], true], // format [$className, Array $config, Boolean $asButton]
        // ]
        ],
    ]);
    ?>

    <?= $form->field($model, 'vencimiento')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
