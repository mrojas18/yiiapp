<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */

$this->title = "Actualizar Producto: {$model->cod_pro}";
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cod_pro, 'url' => ['view', 'id_pro' => $model->id_pro, 'cod_pro' => $model->cod_pro]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="producto-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
