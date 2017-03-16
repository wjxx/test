<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Travel;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TravelController implements the CRUD actions for Travel model.
 */
class TravelController extends Controller
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
     * Lists all Travel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Travel::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

     public function actionUpload(){

        $model = new \frontend\models\UploadForm();
        
        if (Yii::$app->request->isPost) {
            $model->file = \yii\web\UploadedFile::getInstance($model, 'file');
        
            if ($model->file && $model->validate()) {
                $model->file->saveAs('./../uploads/' . $model->file->baseName . '.' . $model->file->extension);

            }
        }
        
        return $this->render('upload', ['model' => $model]);
    }

    /**
     * Displays a single Travel model.
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
     * Creates a new Travel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Travel();
        $upload_model = new \frontend\models\UploadForm();
        $filename = '';
        $post = Yii::$app->request->post();
        if (Yii::$app->request->isPost) {
            $upload_model->file = \yii\web\UploadedFile::getInstance($upload_model, 'file');
        
            if ($upload_model->file && $upload_model->validate()) {
                
                $filename = 'uploads/' . $upload_model->file->baseName . '.' . $upload_model->file->extension;
                $upload_model->file->saveAs($filename);
            }
            $post['Travel']['file'] = $filename;
            // var_dump($post , $model->save());die;
        }
        // var_dump($post['Travel']);die;
        
        // var_dump($model->load($post));die;
        if ($post) {
            $post = $post['Travel'];
            yii::$app->db->createCommand()->insert('travel',['t_title'=>$post['t_title'],'t_site'=>$post['t_title'],'price'=>$post['price'],'sort'=>$post['sort'],'file'=>$post['file']])->execute();
            $this->redirect('?r=travel/index');
        } 
        // echo 1111;die;
        return $this->render('create', [
            'model' => $model,
            'upload_model' => $upload_model,
        ]);
        
    }

    /**
     * Updates an existing Travel model.
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
     * Deletes an existing Travel model.
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
     * Finds the Travel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Travel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Travel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionLists()
    {
        $model = new \frontend\models\Travel();
        $data = $model->getAll2();
        return $this->render('lists', [
                'data' => $data,
            ]);
    }
}
