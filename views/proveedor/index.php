<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProveedorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proveedores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedor-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Proveedor', ['create'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id_prov',
            'cod_prov',
            'nom_prov',
            'cuil_prov',
            //'dir_prov',
            //'pro_prov',
            'est_prov',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
