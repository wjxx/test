<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Login controller
 */
class LoginController extends Controller
{
	//登录
    public function actionLogin()
    {
        return $this->renderPartial('login');
    }
    //退出
    public function actionLogout()
    {
    //     return $this->renderPartial('login');
    }
    //忘记密码
    public function actionReset()
    {
        return $this->renderPartial('reset');
    }
    
}


?>