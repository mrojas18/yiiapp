<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property int $id_pro
 * @property string $cod_pro
 * @property string $des_pro
 * @property string $est_pro
 *
 * @property ProductoPresupuesto[] $productoPresupuestos
 * @property Presupuesto[] $presupuestoIdPres
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cod_pro', 'des_pro', 'nom_pro'], 'required'],
            [['cod_pro'], 'string', 'max' => 45],
            [['des_pro'], 'string', 'max' => 150],
            [['cod_pro'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pro' => 'Id Pro',
            'cod_pro' => 'Código',
            'nom_pro' => 'Nombre',
            'des_pro' => 'Descripción',
            'est_pro' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoPresupuestos()
    {
        return $this->hasMany(ProductoPresupuesto::className(), ['producto_id_pro' => 'id_pro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresupuestoIdPres()
    {
        return $this->hasMany(Presupuesto::className(), ['id_pre' => 'presupuesto_id_pre'])->viaTable('producto_presupuesto', ['producto_id_pro' => 'id_pro']);
    }

    /**
     * @inheritdoc
     * @return ProductoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductoQuery(get_called_class());
    }
}
