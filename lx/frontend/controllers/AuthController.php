<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Auth controller
 */
class AuthController extends Controller
{
	//申请认证
	public function actionAuth()
    {
        return $this->renderPartial('auth');
    }
   //申请认证成功
    public function actionAuthsuccess()
    {
        return $this->renderPartial('authSuccess');
    }
   
}


?>