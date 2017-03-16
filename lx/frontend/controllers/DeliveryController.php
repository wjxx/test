<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Delivery controller
 */
class DeliveryController extends Controller
{
	//投递消息页面
	public function actionDelivery()
    {
        return $this->renderPartial('delivery');
    }
   
}


?>