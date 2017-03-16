<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "yii_news".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 */
class YiiNews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
        ];
    }
    //添加
    public function create1($data)//AR模式1
    {
        $this->setAttributes($data);//载入数据
        return $this->insert();//返回结果
    }
    public function create2($data)//AR模式2
    {
        $this->setAttributes($data);//载入数据
        $this->isNewRecord = true;//新插入数据
        $this->id = 0;//id为0
        return $this->save();//保存
    }

    public function create3($data){//DAO模式
        $sql = "insert into yii_news(title,content)values('{$data['title']}','{$data['content']}')";
        return yii::$app->db->createCommand($sql)->execute();
    }

    //删除
    public function del1($id)//AR模式
    {
        return $this->deleteAll(['id'=>$id]);
    }

    public function del2($id)//DAO模式
    {
        $sql = "delete from yii_news where id='$id'";
        return yii::$app->db->createCommand($sql)->execute();
    }

    //查询
    //一条
    public function getOne($id)
    {
        return $this->find()->where(['id'=>$id])->andWhere(['1'=>'1'])->orWhere(['0'=>1])->asArray()->one();     //andwhere orwhere  1 0是字段
    }
    public function getOne2($id)
    {
        $sql = "select * from yii_news where id='$id' and 1=1 or 0=1";
        return yii::$app->db->createCommand($sql)->queryOne();
    }

    public function getAll()
    {
        return $this->find()/*->where()->andWhere->orWhere*/->asArray()->all();
    }

    public function getAll2()
    {
        $sql='select * from yii_news ';// where $condtion
        return yii::$app->db->createCommand($sql)->queryAll();
    }

    //修改
    public function save1($data){//AR模式
       return  $this->setAttributes($data) && $this->save();
    }
    
    public function save2($data,$id)//DAO模式
    {
        $sql = "update yii_news set title='{$data['title']}',content='{$data['content']}' where id='$id'";
        return yii::$app->db->createCommand($sql)->execute();
    }
}
