<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "presupuesto".
 *
 * @property int $id_pre
 * @property string $cod_pre
 * @property int $id_prov
 * @property string $fec_pre
 * @property int $vencimiento
 * @property string $fecha_reg
 */
class Presupuesto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'presupuesto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cod_pre', 'id_prov'], 'required'],
            [['id_prov', 'vencimiento'], 'integer'],
            [['fec_pre', 'fecha_reg'], 'safe'],
            [['cod_pre'], 'string', 'max' => 45],
            [['id_prov'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedor::className(), 'targetAttribute' => ['id_prov' => 'id_prov']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            
            'cod_pre' => 'Código',
            'id_prov' => 'Proveedor',
            'fec_pre' => 'Fecha',
            'vencimiento' => 'Vencimiento',
            'fecha_reg' => 'F. Registro',
        ];
    }

    /**
     * @inheritdoc
     * @return PresupuestoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PresupuestoQuery(get_called_class());
    }
}
