<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "travel".
 *
 * @property integer $id
 * @property string $t_title
 * @property string $t_site
 * @property string $price
 * @property integer $sort
 */
class Travel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'sort'], 'integer'],
            [['price'], 'number'],
            [['t_title', 't_site','file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            't_title' => '标题',
            't_site' => '景点',
            'price' => '价格',
            'sort' => '排序',
            'file'=>'图片',
        ];
    }

    public function getAll2()
    {
        $sql='select * from travel order by sort asc';// where $condtion
        return yii::$app->db->createCommand($sql)->queryAll();
    }

}
