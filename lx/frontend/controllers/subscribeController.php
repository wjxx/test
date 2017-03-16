<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Subscribe controller
 */
class SubscribeController extends Controller
{
	//订阅职位列表
	public function actionSubscribesel()
    {
        return $this->renderPartial('subscribe_sel');
    }
    //订阅职位添加
	public function actionSubscribecre()
    {
        return $this->renderPartial('subscribe_cre');
    }
   
}


?>