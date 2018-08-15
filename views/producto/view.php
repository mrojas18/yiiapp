<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Producto */

$this->title = $model->cod_pro;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_pro' => $model->id_pro, 'cod_pro' => $model->cod_pro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id_pro' => $model->id_pro, 'cod_pro' => $model->cod_pro], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estas Seguro que deseas eliminar el producto?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_pro',
            'cod_pro',
            'des_pro',
            'est_pro',
        ],
    ]) ?>

</div>
