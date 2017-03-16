<?php

namespace frontend\controllers;

use Yii;
use frontend\models\YiiNews;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DemoController implements the CRUD actions for YiiNews model.
 */
class DemoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all YiiNews models.
     * @return mixed
     */
    public function actionIndex()
    {
        $request = yii::$app->request;
        if ($request->isGet) {
            echo 'this is get';die;
        }
        /*$model=new \frontend\models\YiiNews();
        $data=[
            'title'=>'test',
            'content'=>'content',
        ];
        var_dump($model->create3($data));
        // var_dump($model->create2($data));
        // var_dump($model->create3($data));
        exit;*/

        $dataProvider = new ActiveDataProvider([
            'query' => YiiNews::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    //修改
    public function actionSave(){
        $model = new \frontend\models\YiiNews();
        $data = array('title'=>'test1','content'=>'content1');
        echo $model->save2($data,4);
    }

    //查询
    public function actionGetOne(){
        $model = new \frontend\models\YiiNews();
        $data = $model->getAll2();
        var_dump($data);die;


        $data = $model->getOne(5);
        var_dump($data);die;
    }

    //删除
    public function actionDel(){
        $model = new \frontend\models\YiiNews();
        echo $model->del2(3);
        echo $model->del1(2);
    }

    /**
     * Displays a single YiiNews model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new YiiNews model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new YiiNews();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing YiiNews model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing YiiNews model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the YiiNews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return YiiNews the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = YiiNews::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
