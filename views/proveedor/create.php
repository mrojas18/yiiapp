<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Proveedor */

$this->title = 'Agregar';
$this->params['breadcrumbs'][] = ['label' => 'Proveedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedor-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
