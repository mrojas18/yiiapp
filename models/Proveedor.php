<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedor".
 *
 * @property int $id_prov
 * @property string $cod_prov
 * @property string $nom_prov
 * @property string $cuil_prov
 * @property string $dir_prov
 * @property string $pro_prov provincia del proveedor 
 * @property string $est_prov
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proveedor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom_prov'], 'required'],
            [['cod_prov', 'nom_prov', 'cuil_prov', 'dir_prov', 'pro_prov'], 'string', 'max' => 45],
            [['est_prov'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            
            'cod_prov' => 'Código',
            'nom_prov' => 'Nombre',
            'cuil_prov' => 'Cuil',
            'dir_prov' => 'Dirreción',
            'pro_prov' => 'Provincia',
            'est_prov' => 'Estado',
        ];
    }

    /**
     * @inheritdoc
     * @return ProveedorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProveedorQuery(get_called_class());
    }
}
